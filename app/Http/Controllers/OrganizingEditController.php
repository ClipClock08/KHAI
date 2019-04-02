<?php

namespace App\Http\Controllers;

use App\Organizing;
use Validator;
use Illuminate\Http\Request;

class OrganizingEditController extends Controller
{
    //
    public function execute(Organizing $organizing, Request $request){



        if($request->isMethod('delete')){
            $organizing->delete();
            return redirect('admin')->with('status', 'Info was deleted');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'degree' => 'max:50',
                'fio' => 'required|max:50',
                'info' => 'required|max:255'

            ]);

            if($validator->fails()){
                return redirect()
                    ->route('organizingEdit',['organizing'=>$organizing['id']])
                    ->withErrors($validator);
            }

            $organizing->fill($input);

            if($organizing->update()){
                return redirect('admin')->with('status','Info was updated');
            }
        }

        $old = $organizing->toArray();

        if(view()->exists('admin.organizing_edit')) {

            $data = [
                'title' => 'Editing block of ' . $old['degree'],
                'data' => $old
            ];
            return view('admin.organizing_edit', $data);
        }else{
            abort(404);
        }

    }
}
