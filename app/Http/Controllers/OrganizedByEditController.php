<?php

namespace App\Http\Controllers;

use App\OrganizedBy;
use Validator;
use Illuminate\Http\Request;

class OrganizedByEditController extends Controller
{
    //
    public function execute(OrganizedBy $organized_by, Request $request){



        if($request->isMethod('delete')){
            $organized_by->delete();
            return redirect('admin')->with('status', 'Info was deleted');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'title' => 'required|max:255',
                'address' => 'required|max:255',
                'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
                'google_map' => 'required'

            ]);

            if($validator->fails()){
                return redirect()
                    ->route('organizedByEdit',['organizedBy'=>$organized_by['id']])
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


            $organized_by->fill($input);

            if($organized_by->update()){
                return redirect('admin')->with('status','Info was updated');
            }
        }

        $old = $organized_by->toArray();

        if(view()->exists('admin.organized_by_edit')) {

            $data = [
                'title' => 'Editing block of ' . $old['title'],
                'data' => $old
            ];
            return view('admin.organized_by_edit', $data);
        }else{
            abort(404);
        }

    }
}
