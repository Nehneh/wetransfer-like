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
    return view('welcome');
});

<<<<<<< HEAD


Route::get('/', function () {
    return view('Salut Pat');
});

Route::resource('/input','FormController'); // Route vers page after submit
=======
>>>>>>> 0c0cbb93b83ca383bb7b1050e4e02c61e1e33caf
