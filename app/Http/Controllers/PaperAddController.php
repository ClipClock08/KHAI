<?php

namespace App\Http\Controllers;

use App\Paper;
use Validator;
use Illuminate\Http\Request;

class PaperAddController extends Controller
{
    //
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $validator = Validator::make($input, [

                'title' => 'required|max:150',
                'text' => 'required',
                'button_name' => 'required|max:100',

            ]);

            if ($validator->fails()) {
                return redirect('admin/paper/add')
                    ->withErrors($validator)
                    ->withInput();
            }

            $papers = new Paper();

            $papers->fill($input);

            if ($papers->save()) {
                return redirect('admin')->with('status', 'Block was added!');
            }
        }

        $data = $request->all();
        if (view()->exists('admin.paper_add')) {

            $data = [
                'title' => 'New paper block'
            ];

            return view('admin.paper_add', $data);
        }

        abort(404);

    }
}
