<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




// Route::get('{year}', function ($year) {
// 	echo $year;
//     return view('pages.gallery');
// });
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // Route::get('/home', 'HomeController@index');

    Route::get('/', function () {

    	// return DB::table('users')->get();
    return view('master');


});


Route::get('senior-staff', function () {
    return view('pages.academic-staff');
});

});
