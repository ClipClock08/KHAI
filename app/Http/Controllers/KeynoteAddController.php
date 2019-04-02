<?php

namespace App\Http\Controllers;

use App\Keynote;
use Validator;
use Illuminate\Http\Request;

class KeynoteAddController extends Controller
{
    //
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $validator = Validator::make($input, [

                'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                'speaker' => 'required|max:200',
                'city' => 'required|max:100'

            ]);

            if ($validator->fails()) {
                return redirect('admin/keynote/add')
                    ->withErrors($validator)
                    ->withInput();
            }


            //For Images
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $input['image'] = $file->getClientOriginalName();
                $file->move(public_path() . '/assets/img', $input['image']);
            }

            $keynotes = new Keynote();

            $keynotes ->fill($input);

            if ($keynotes ->save()) {
                return redirect('admin')->with('status', 'Speaker was added!');
            }
        }

        $data = $request->all();
        if (view()->exists('admin.keynote_add')) {

            $data = [
                'title' => 'New speaker'
            ];

            return view('admin.keynote_add', $data);
        }

        abort(404);

    }
}
