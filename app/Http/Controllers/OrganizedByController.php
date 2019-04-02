<?php

namespace App\Http\Controllers;

use App\OrganizedBy;
use Illuminate\Http\Request;

class OrganizedByController extends Controller
{
    //
    public function execute(){
        if(view()->exists('admin.organized_by')){
            $organized_by = OrganizedBy::all();

            $data = [
                'title' => 'Organized By info',
                 'organized_by' => $organized_by,
            ];

            return view('admin.organized_by', $data);
        }

        abort(404);
    }
}
