<?php

namespace App\Http\Controllers;

use App\ImportantDates;
use Illuminate\Http\Request;

class ImportantDatesController extends Controller
{
    //
    public function execute(){
        if(view()->exists('admin.important_dates')){
            $important_dates = ImportantDates::all();

            $data = [
                'title' => 'Important dates info',
                'important_dates' => $important_dates,
            ];

            return view('admin.important_dates', $data);
        }

        abort(404);
    }
}
