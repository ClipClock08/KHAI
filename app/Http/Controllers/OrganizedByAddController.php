<?php

namespace App\Http\Controllers;

use App\OrganizedBy;
use Validator;
use Illuminate\Http\Request;

class OrganizedByAddController extends Controller
{
    //
    public function execute(Request $request){

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'title' => 'required|max:255',
                'address' => 'required|max:255',
                'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                'google_map' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect('admin/organized_by/add')
                    ->withErrors($validator)
                    ->withInput();
            }


            //For Images
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $input['image'] = $file->getClientOriginalName();
                $file->move(public_path().'/assets/img',$input['image']);
            }

            $organized_by = new OrganizedBy();

            $organized_by->fill($input);

            if($organized_by->save()){
                return redirect('admin')->with('status','Organized by was added!');
            }
        }

        $data = $request->all();
        if(view()->exists('admin.organized_by_add')){

            $data = [
                'title' => 'New organized by info'
            ];

            return view('admin.organized_by_add', $data);
        }

        abort(404);

    }
}
