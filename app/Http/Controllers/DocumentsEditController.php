<?php

namespace App\Http\Controllers;

use App\Documents;
use Validator;
use Illuminate\Http\Request;

class DocumentsEditController extends Controller
{
    //
    public function execute(Documents $documents, Request $request){



        if($request->isMethod('delete')){
            $documents->delete();
            return redirect('admin')->with('status', 'Info was deleted');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'icon' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                'title' => 'required|max:255',
                'file' => 'required|max:100000'

            ]);

            if($validator->fails()){
                return redirect()
                    ->route('documentsEdit',['documents'=>$documents['id']])
                    ->withErrors($validator);
            }

            //For Images
            if($request->hasFile('icon')) {
                $file = $request->file('icon');
                $file->move(public_path().'/assets/img',$file->getClientOriginalName());
                $input['icon'] = $file->getClientOriginalName();
            }else{
                $input['icon'] = $input['old_icon'];
            }

            unset($input['old_icon']);

            //For file
            if($request->hasFile('file')) {
                $file = $request->file('file');
                $file->move(public_path().'/assets/documents',$file->getClientOriginalName());
                $input['file'] = $file->getClientOriginalName();
            }else{
                $input['file'] = $input['old_file'];
            }

            unset($input['old_file']);


            $documents->fill($input);

            if($documents->update()){
                return redirect('admin')->with('status','Info was updated');
            }
        }

        $old = $documents->toArray();

        if(view()->exists('admin.documents_edit')) {

            $data = [
                'title' => 'Editing block of ' . $old['icon'],
                'data' => $old
            ];
            return view('admin.documents_edit', $data);
        }else{
            abort(404);
        }

    }
}
