<?php

namespace App\Http\Controllers;

use App\Intro;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    //
    public function execute(){
        if(view()->exists('admin.intro')){
            $intros = Intro::all();

            $data = [
                'title' => 'Event info',
                'intros' => $intros,
            ];

            return view('admin.intro', $data);
        }

        abort(404);
    }
}
