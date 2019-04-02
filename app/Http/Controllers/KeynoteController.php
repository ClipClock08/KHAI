<?php

namespace App\Http\Controllers;

use App\Keynote;
use Validator;
use Illuminate\Http\Request;

class KeynoteController extends Controller
{
    //
    public function execute(){
        if(view()->exists('admin.keynote')){
            $keynotes = Keynote::all();

            $data = [
                'title' => 'Speakers info',
                'keynotes' => $keynotes,
            ];

            return view('admin.keynote', $data);
        }

        abort(404);
    }
}
