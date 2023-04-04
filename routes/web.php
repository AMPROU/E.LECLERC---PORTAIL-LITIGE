<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

# Socialite URLs
Route::get('/', 'App\Http\Controllers\SocialiteController@loginRegister');
Route::get('/redirect/{provider}', 'App\Http\Controllers\SocialiteController@redirect')->name('socialite.redirect');
Route::get('/callback/{provider}', 'App\Http\Controllers\SocialiteController@callback')->name('socialite.callback');
Route::get('/exit', 'App\Http\Controllers\SocialiteController@exit');

# HOME
Route::get('/home', 'App\Http\Controllers\home@index');

#Non Autorisée
Route::get('notaccess', function () {
    return view('welcome');
});


