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
use App\Classes\Helper as Helper;
Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/test',function(){
	return view('frontend.transaction.buy_sell_steem_sbd');
});
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::middleware(['auth'])->prefix('api')->group(function(){
	Route::get('users', function () {
        return App\User::all();
    });
});

Route::namespace('Frontend')->middleware(['auth'])->group(function(){
	Route::get('dashboard','UserController@userDashboard');
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
