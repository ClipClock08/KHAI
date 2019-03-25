<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //
    public function execute(){
        if(view()->exists('admin.footer')){
            $footer= Footer::all();

            $data = [
                'title' => 'Footer info',
                'footer' => $footer,
            ];

            return view('admin.footer', $data);
        }

        abort(404);
    }
}
