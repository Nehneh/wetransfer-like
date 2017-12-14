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

Route::get('/', function () {
    return view('forms.index');
});

Route::get('/',function(){
	return view('insertForm');
});

Route::post('/insert', 'FormController@insert');

Route::resource('/input','FormController'); // Route vers page after submit

// Route::resource('/input','FormController'); // Route vers page after submit
