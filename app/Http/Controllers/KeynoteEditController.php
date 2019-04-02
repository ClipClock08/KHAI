<?php

namespace App\Http\Controllers;

use App\Keynote;
use Validator;
use Illuminate\Http\Request;

class KeynoteEditController extends Controller
{
    //
    public function execute(Keynote $keynote, Request $request){



        if($request->isMethod('delete')){
            $keynote->delete();
            return redirect('admin')->with('status', 'Info was deleted');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                'speaker' => 'required|max:200',
                'city' => 'required|max:100'

            ]);

            if($validator->fails()){
                return redirect()
                    ->route('keynoteEdit',['keynote'=>$keynote['id']])
                    ->withErrors($validator);
            }

            //For Images
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path().'/assets/img',$file->getClientOriginalName());
                $input['image'] = $file->getClientOriginalName();
            }else{
                $input['image'] = $input['old_image'];
            }

            unset($input['old_image']);

            $keynote->fill($input);

            if($keynote->update()){
                return redirect('admin')->with('status','Info was updated');
            }
        }

        $old = $keynote->toArray();

        if(view()->exists('admin.keynote_edit')) {

            $data = [
                'title' => 'Editing block of ' . $old['speaker'],
                'data' => $old
            ];
            return view('admin.keynote_edit', $data);
        }else{
            abort(404);
        }

    }
}
