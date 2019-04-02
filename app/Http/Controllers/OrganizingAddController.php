<?php

namespace App\Http\Controllers;

use App\Organizing;
use Validator;
use Illuminate\Http\Request;

class OrganizingAddController extends Controller
{
    //
    public function execute(Request $request){

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'degree' => 'max:50',
                'fio' => 'required|max:50',
                'info' => 'required|max:255'
            ]);

            if ($validator->fails()) {
                return redirect('admin/organizing/add')
                    ->withErrors($validator)
                    ->withInput();
            }

            $organizing = new Organizing();

            $organizing->fill($input);

            if($organizing->save()){
                return redirect('admin')->with('status','Organizing committee info was added!');
            }
        }

        $data = $request->all();
        if(view()->exists('admin.organizing_add')){

            $data = [
                'title' => 'New organizing committee info'
            ];

            return view('admin.organizing_add', $data);
        }

        abort(404);

    }
}
