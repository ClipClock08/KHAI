<?php

namespace App\Http\Controllers;

use App\ConfTopics;
use App\Documents;
use App\Footer;
use App\ImportantDates;
use App\Keynote;
use App\OrganizedBy;
use App\Organizing;
use App\Paper;
use App\Prices;
use App\Programme;
use Illuminate\Support\Facades\DB;
use App\Intro;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function execute()
    {

        $intros = Intro::latest()->first();
        $intros = $intros->toArray();

        $important_dates = ImportantDates::all();

        $conf_topics = ConfTopics::latest()->first();
        $conf_topics = $conf_topics->toArray();

        $keynotes = Keynote::latest()->first();
        $keynotes = $keynotes->toArray();

        $programme = Programme::latest()->first();
        $programme = $programme->toArray();

        $organizing = Organizing::all();

        $documents = Documents::all();

        $prices = Prices::all();

        $paper = Paper::all();

        $organized_by = OrganizedBy::latest()->first();
        $organized_by = $organized_by->toArray();

        $footer = Footer::latest()->first();
        $footer = $footer->toArray();

        return view('site', [

            'intros' => $intros,
            'important_dates' => $important_dates,
            'cont_topics' => $conf_topics,
            'keynotes' => $keynotes,
            'programme' => $programme,
            'organizing' => $organizing,
            'documents' => $documents,
            'prices' => $prices,
            'papers' => $paper,
            'organized_by' => $organized_by,
            'footer' => $footer

        ]);
    }
}
