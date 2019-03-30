<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware'=>'web'], function (){

    Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);

    Route::auth();

});

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){

    //admin
    Route::get('/', function (){

        if(view()->exists('admin.index')){
            $data = ['title' => 'Admin panel'];

            return view('admin.index', $data);
        }

    });

    //admin/intro
    Route::group(['prefix'=>'intro'], function (){

        //admin/pages
        Route::get('/', ['uses'=>'IntroController@execute','as'=>'intro']);

        //admin/pages/add
        Route::match(['get','post'], '/add',['uses'=>'IntroAddController@execute', 'as'=>'introAdd']);

        //admin/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{intro}', ['uses'=>'IntroEditController@execute', 'as'=>'introEdit']);

    });

    //admin/important_dates
    Route::group(['prefix'=>'important_dates'], function (){

        //admin/important_dates
        Route::get('/', ['uses'=>'ImportantDatesController@execute','as'=>'important_dates']);

        //admin/important_dates/add
        Route::match(['get','post'], '/add',['uses'=>'ImportantAddDatesController@execute', 'as'=>'important_datesAdd']);

        //admin/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{important_dates}', ['uses'=>'ImportantEditDatesController@execute', 'as'=>'important_datesEdit']);

    });

    //admin/conf_topics
    Route::group(['prefix'=>'conf_topics'], function (){

        //admin/conf_topics
        Route::get('/', ['uses'=>'ConfTopicsController@execute','as'=>'conf_topics']);

        //admin/conf_topics/add
        Route::match(['get','post'], '/add',['uses'=>'ConfTopicsAddController@execute', 'as'=>'conf_topicsAdd']);

        //admin/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{conf_topics}', ['uses'=>'ConfTopicsEditController@execute', 'as'=>'conf_topicsEdit']);

    });


    //admin/keynote
    Route::group(['prefix'=>'keynote'], function (){

        //admin/keynote
        Route::get('/', ['uses'=>'KeynoteController@execute','as'=>'keynote']);

        //admin/keynote/add
        Route::match(['get','post'], '/add',['uses'=>'KeynoteAddController@execute', 'as'=>'keynoteAdd']);

        //admin/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{keynote}', ['uses'=>'KeynoteEditController@execute', 'as'=>'keynoteEdit']);

    });

    //admin/programme
    Route::group(['prefix'=>'programme'], function (){

        //admin/programme
        Route::get('/', ['uses'=>'ProgrammeController@execute','as'=>'programme']);

        //admin/programme/add
        Route::match(['get','post'], '/add',['uses'=>'ProgrammeAddController@execute', 'as'=>'programmeAdd']);

        //admin/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{programme}', ['uses'=>'ProgrammeEditController@execute', 'as'=>'programmeEdit']);

    });

    //admin/organizing
    Route::group(['prefix'=>'organizing'], function (){

        //admin/organizing
        Route::get('/', ['uses'=>'OrganizingController@execute','as'=>'organizing']);

        //admin/organizing/add
        Route::match(['get','post'], '/add',['uses'=>'OrganizingAddController@execute', 'as'=>'organizingAdd']);

        //admin/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{organizing}', ['uses'=>'OrganizingEditController@execute', 'as'=>'organizingEdit']);

    });

    //admin/documents
    Route::group(['prefix'=>'documents'], function (){

        //admin/documents
        Route::get('/', ['uses'=>'DocumentsController@execute','as'=>'documents']);

        //admin/documents/add
        Route::match(['get','post'], '/add',['uses'=>'DocumentsAddController@execute', 'as'=>'documentsAdd']);

        //admin/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{documents}', ['uses'=>'DocumentsEditController@execute', 'as'=>'documentsEdit']);

    });

    //admin/prices
    Route::group(['prefix'=>'prices'], function (){

        //admin/
        Route::get('/', ['uses'=>'PricesController@execute','as'=>'prices']);

        //admin/prices/add
        Route::match(['get','post'], '/add',['uses'=>'PricesAddController@execute', 'as'=>'pricesAdd']);

        //admin/prices/{id}
        Route::match(['get', 'post','delete'], '/edit/{prices}', ['uses'=>'PricesEditController@execute', 'as'=>'pricesEdit']);

    });

    //admin/paper
    Route::group(['prefix'=>'paper'], function (){

        //admin/paper
        Route::get('/', ['uses'=>'PaperController@execute','as'=>'paper']);

        //admin/paper/add
        Route::match(['get','post'], '/add',['uses'=>'PaperAddController@execute', 'as'=>'paperAdd']);

        //admin/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{paper}', ['uses'=>'PaperEditController@execute', 'as'=>'paperEdit']);

    });

    //admin/organized_by
    Route::group(['prefix'=>'organized_by'], function (){

        //admin/organized_by
        Route::get('/', ['uses'=>'OrganizedByController@execute','as'=>'organized_by']);

        //admin/organized_by/add
        Route::match(['get','post'], '/add',['uses'=>'OrganizedByAddController@execute', 'as'=>'organized_byAdd']);

        //admin/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{organized_by}', ['uses'=>'OrganizedByEditController@execute', 'as'=>'organized_byEdit']);

    });

    //admin/footer
    Route::group(['prefix'=>'footer'], function (){

        //admin/footer
        Route::get('/', ['uses'=>'FooterController@execute','as'=>'footer']);

        //admin/people/add
        Route::match(['get','post'], '/add',['uses'=>'FooterAddController@execute', 'as'=>'footerAdd']);

        //admin/people/edit/{id}
        Route::match(['get', 'post','delete'], '/edit/{footer}', ['uses'=>'FooterEditController@execute', 'as'=>'footerEdit']);

    });


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
