<?php

namespace App\Http\Controllers;

use App\Intro;
use Illuminate\Http\Request;
use Validator;

class IntroEditController extends Controller
{
    //
    public function execute(Intro $intro, Request $request){


        if($request->isMethod('delete')){
            $intro->delete();
            return redirect('admin')->with('status', 'Info was deleted');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'head'=>'required|max:255',
                'event'=>'required|max:255',
                'place'=>'required|max:255',
                'text'=>'required',

            ]);

            if($validator->fails()){
                return redirect()
                    ->route('introEdit',['intro'=>$input['id']])
                    ->withErrors($validator);
            }

            //For Images
            /*if($request->hasFile('images')) {
                $file = $request->file('images');
                $file->move(public_path().'/assets/img',$file->getClientOriginalName());
                $input = $file->getClientOriginalName();
            }else{
                $input['images'] = $input['old_images'];
            }

            unset($input['old_images'])'
            */

            $intro->fill($input);

            if($intro->update()){
                return redirect('admin')->with('status','Info was updated');
            }
        }

        $old = $intro->toArray();

        if(view()->exists('admin.intros_edit')) {

            $data = [
                'title' => 'Editing block of ' . $old['head'],
                'data' => $old
            ];
            return view('admin.intros_edit', $data);
        }else{
            abort(404);
        }

    }
}
