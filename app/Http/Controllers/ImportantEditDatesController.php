<?php

namespace App\Http\Controllers;

use App\ImportantDates;
use Illuminate\Http\Request;
use Validator;

class ImportantEditDatesController extends Controller
{
    //
    public function execute(ImportantDates $important_dates, Request $request){


        if($request->isMethod('delete')){
            $important_dates->delete();
            return redirect('admin')->with('status', 'Info was deleted');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $validator = Validator::make($input,[

                'event_date'=>'required|date',
                'event_title'=>'required|max:255',

            ]);

            if($validator->fails()){
                return redirect()
                    ->route('important_datesEdit',['important_dates'=>$important_dates['id']])
                    ->withErrors($validator);
            }


            $important_dates->fill($input);

            if($important_dates->update()){
                return redirect('admin')->with('status','Date info was updated');
            }
        }

        $old = $important_dates->toArray();

        if(view()->exists('admin.important_dates_edit')) {

            $data = [
                'title' => 'Editing block of ' . $old['event_title'],
                'data' => $old
            ];
            return view('admin.important_dates_edit', $data);
        }else{
            abort(404);
        }

    }
}
