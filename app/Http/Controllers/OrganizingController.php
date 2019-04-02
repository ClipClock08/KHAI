<?php

namespace App\Http\Controllers;

use App\Organizing;
use Illuminate\Http\Request;

class OrganizingController extends Controller
{
    //
    public function execute(){
        if(view()->exists('admin.organizing')){
            $organizing= Organizing::all();

            $data = [
                'title' => 'Organizing committee info',
                'organizing' => $organizing,
            ];

            return view('admin.organizing', $data);
        }

        abort(404);
    }
}
