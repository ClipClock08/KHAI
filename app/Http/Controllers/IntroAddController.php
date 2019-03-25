<?php

namespace App\Http\Controllers;

use App\Intro;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntroAddController extends Controller
{
    //
    public function execute(Request $request){

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'head' => 'required|max:255',
                'event' => 'required|max:255',
                'place' => 'required|max:255',
                'text' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect('admin/intro/add')
                    ->withErrors($validator)
                    ->withInput();
            }


            //For Images
            if($request->hasFile('images')) {
                $file = $request->file('images');
                $input['images'] = $file->getClientOriginalName();
                $file->move(public_path().'/assets/img',$input['images']);
            }

            $intros = new Intro();

            $intros->fill($input);

            if($intros->save()){
                return redirect('admin')->with('status','Main infos was added!');
            }
        }

        $data = $request->all();
        if(view()->exists('admin.intros_add')){

            $data = [
                'title' => 'New event info'
            ];

            return view('admin.intros_add', $data);
        }

        abort(404);

    }
}
