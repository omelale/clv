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
    return view('welcome1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'UserController@get_profile')->name('profile');
Route::post('/profile_pic', 'UserController@update_profile_picture')->name('profile_pic');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
