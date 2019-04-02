<?php

namespace App\Http\Controllers;

use App\Documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    //
    public function execute(){
        if(view()->exists('admin.documents')){
            $documents = Documents::all();

            $data = [
                'title' => 'Documents info',
                'documents' => $documents,
            ];

            return view('admin.documents', $data);
        }

        abort(404);
    }
}
