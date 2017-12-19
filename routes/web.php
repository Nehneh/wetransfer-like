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

// Route::get('/', function () {
//     return view('forms.index');
// });
/*
Route::get('/',function(){	
	return view('welcome');
});
*/
// Route::get('/',function(){	
// 	return view('forms.index');
// });


//Route::post('/insert', 'FormController@insert');

//Route::resource('/input','FormController'); // Route vers page after submit

// Route::resource('/input','FormController'); // Route vers page after submit
// Route::get('/file','uploadControllerTim@index');
// Route::get('/file/store','uploadControllerTim@store');


Route::resource("/",'FormController');

Route::resource("mails.contact",'FormController');



<<<<<<< HEAD
Route::get('upload','uploadControllerTim@index');
Route::post('upload','uploadControllerTim@store');



// daNS LIDEAL 
// Route::resource('/', CONTROLLERFINALVECLAFONCTIONSTOREDBMAIL )
=======
// Route::get('/input','FormController@index');
// Route::post('/input','FormController@store');
>>>>>>> 096cc42b6a92a077235c54d5bf5903249a0f4b12
