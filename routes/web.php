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
    return view('frontend.home');
});

Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::middleware(['auth'])->prefix('api')->group(function(){
	Route::get('users', function () {
        return App\User::all();
    });
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
