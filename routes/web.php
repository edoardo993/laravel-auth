<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::resource('supplements', 'MainController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/supplements', 'PublicController@index')->name('public-index');

Route::get('/supplements/{supplement}', 'PublicController@show')->name('public-show');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function (){
        Route::resource('/supplements', MainController::class);
});
