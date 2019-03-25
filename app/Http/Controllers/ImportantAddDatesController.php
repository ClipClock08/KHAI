<?php

namespace App\Http\Controllers;

use App\ImportantDates;
use Illuminate\Http\Request;
use Validator;

class ImportantAddDatesController extends Controller
{
    //
    public function execute(Request $request){

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'event_date' => 'required|date',
                'event_title' => 'required|max:255',
            ]);

            if ($validator->fails()) {
                return redirect('admin/important_dates/add')
                    ->withErrors($validator)
                    ->withInput();
            }

            $important_dates = new ImportantDates();

            $important_dates->fill($input);

            if($important_dates->save()){
                return redirect('admin')->with('status','Date was added!');
            }
        }

        $data = $request->all();
        if(view()->exists('admin.important_dates_add')){

            $data = [
                'title' => 'New important date'
            ];

            return view('admin.important_dates_add', $data);
        }

        abort(404);

    }
}
