<?php

namespace App\Http\Controllers;

use App\Prices;
use Validator;
use Illuminate\Http\Request;

class PricesEditController extends Controller
{
    //
    public function execute(Prices $prices, Request $request){


        if($request->isMethod('delete')){
            $prices->delete();
            return redirect('admin')->with('status', 'Info was deleted');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'title' => 'required|max:150',
                'first_price' => 'required|max:20',
                'second_price' => 'required|max:20',

            ]);

            if($validator->fails()){
                return redirect()
                    ->route('pricesEdit',['prices'=>$prices['id']])
                    ->withErrors($validator);
            }


            $prices->fill($input);

            if($prices->update()){
                return redirect('admin')->with('status','Conference fee info was updated');
            }
        }

        $old = $prices->toArray();

        if(view()->exists('admin.prices_edit')) {

            $data = [
                'title' => 'Editing block of ' . $old['title'],
                'data' => $old
            ];
            return view('admin.prices_edit', $data);
        }else{
            abort(404);
        }

    }
}
