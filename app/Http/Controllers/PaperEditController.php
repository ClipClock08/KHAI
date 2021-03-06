<?php

namespace App\Http\Controllers;

use App\Paper;
use Validator;
use Illuminate\Http\Request;

class PaperEditController extends Controller
{
    //
    public function execute(Paper $paper, Request $request){


        if($request->isMethod('delete')){
            $paper->delete();
            return redirect('admin')->with('status', 'Info was deleted');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'title' => 'required|max:150',
                'text' => 'required',
                'button_name' => 'required|max:100',

            ]);

            if($validator->fails()){
                return redirect()
                    ->route('paperEdit',['paper'=>$input['id']])
                    ->withErrors($validator);
            }

            $paper->fill($input);

            if($paper->update()){
                return redirect('admin')->with('status','Info was updated');
            }
        }

        $old = $paper->toArray();

        if(view()->exists('admin.paper_edit')) {

            $data = [
                'title' => 'Editing block of ' . $old['title'],
                'data' => $old
            ];
            return view('admin.paper_edit', $data);
        }else{
            abort(404);
        }

    }
}
