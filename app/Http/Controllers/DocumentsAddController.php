<?php

namespace App\Http\Controllers;

use App\Documents;
use Validator;
use Illuminate\Http\Request;

class DocumentsAddController extends Controller
{
    //
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $validator = Validator::make($input, [

                'icon' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                'title' => 'required|max:255',
                'file' => 'required|max:100000'

            ]);

            if ($validator->fails()) {
                return redirect('admin/documents/add')
                    ->withErrors($validator)
                    ->withInput();
            }


            //For Images
            if ($request->hasFile('icon')) {
                $file = $request->file('icon');
                $input['icon'] = $file->getClientOriginalName();
                $file->move(public_path() . '/assets/img', $input['icon']);
            }

            //For file
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $input['file'] = $file->getClientOriginalName();
                $file->move(public_path() . '/assets/documents', $input['file']);
            }

            $documents = new Documents();

            $documents->fill($input);

            if ($documents->save()) {
                return redirect('admin')->with('status', 'Documents was added!');
            }
        }

        $data = $request->all();
        if (view()->exists('admin.documents_add')) {

            $data = [
                'title' => 'New documents info'
            ];

            return view('admin.documents_add', $data);
        }

        abort(404);

    }
}
