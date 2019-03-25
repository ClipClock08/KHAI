<?php

namespace App\Http\Controllers;


use App\Footer;
use Illuminate\Http\Request;
use Validator;

class FooterAddController extends Controller
{
    //
    public function execute(Request $request){

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'copy_write' => 'required|max:255',
                'event_head' => 'required|max:255',
                'event_title' => 'required|max:255',
                'footer' => 'required|max:255'
            ]);

            if ($validator->fails()) {
                return redirect('admin/footer/add')
                    ->withErrors($validator)
                    ->withInput();
            }


            $footer = new Footer();

            $footer->fill($input);

            if($footer->save()){
                return redirect('admin')->with('status','Footer info was added!');
            }
        }

        $data = $request->all();
        if(view()->exists('admin.footer')){

            $data = [
                'title' => 'New footer info'
            ];

            return view('admin.footer_add', $data);
        }

        abort(404);

    }
}
