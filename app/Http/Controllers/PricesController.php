<?php

namespace App\Http\Controllers;

use App\Prices;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    //
    public function execute(){
        if(view()->exists('admin.prices')){
            $prices = Prices::all();

            $data = [
                'title' => 'Conference fee info',
                'prices' => $prices
            ];

            return view('admin.prices', $data);
        }

        abort(404);
    }
}
