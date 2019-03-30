<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    //
    public function execute()
    {
        if (view()->exists('admin.paper')) {
            $papers = Paper::all();

            $data = [
                'title' => 'Paper submission block',
                'papers' => $papers
            ];

            return view('admin.paper', $data);
        }

        abort(404);
    }
}
