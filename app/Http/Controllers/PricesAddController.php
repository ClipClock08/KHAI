<?php

namespace App\Http\Controllers;

use App\Prices;
use Validator;
use Illuminate\Http\Request;

class PricesAddController extends Controller
{
    //
    public function execute(Request $request){

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input, [

                'title' => 'required|max:150',
                'first_price' => 'required|max:20',
                'second_price' => 'required|max:20',

            ]);

            if ($validator->fails()) {
                return redirect('admin/prices/add')
                    ->withErrors($validator)
                    ->withInput();
            }

            $prices = new Prices();

            $prices ->fill($input);

            if($prices ->save()){
                return redirect('admin')->with('status','Conference fee field was added!');
            }
        }

        $data = $request->all();
        if(view()->exists('admin.prices_add')){

            $data = [
                'title' => 'New conference fee info'
            ];

            return view('admin.prices_add', $data);
        }

        abort(404);

    }
}
