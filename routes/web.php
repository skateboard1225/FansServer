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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/get_registercode','Account\RegisterController@getRegisterCode');

Route::post('/register','Account\RegisterController@register');



Route::get('date',function()
{
  return date("Y-m-d:H:i:s");
});
