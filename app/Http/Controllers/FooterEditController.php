<?php

namespace App\Http\Controllers;

use App\Footer;
use Validator;
use Illuminate\Http\Request;

class FooterEditController extends Controller
{
    //
    public function execute(Footer $footer, Request $request){


        if($request->isMethod('delete')){
            $footer->delete();
            return redirect('admin')->with('status', 'Info was deleted');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'copy_write' => 'required|max:255',
                'event_head' => 'required|max:255',
                'event_title' => 'required|max:255',
                'footer' => 'required|max:255'

            ]);

            if($validator->fails()){
                return redirect()
                    ->route('footerEdit',['footer'=>$footer['id']])
                    ->withErrors($validator);
            }


            $footer->fill($input);

            if($footer->update()){
                return redirect('admin')->with('status','Info was updated');
            }
        }

        $old = $footer->toArray();

        if(view()->exists('admin.footer_edit')) {

            $data = [
                'title' => 'Editing footer block of ' . $old['footer'],
                'data' => $old
            ];
            return view('admin.footer_edit', $data);
        }else{
            abort(404);
        }

    }
}
