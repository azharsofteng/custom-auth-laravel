<?php

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
// registration controller route
Route::get('register','Auth\RegistrationController@register');
Route::post('register','Auth\RegistrationController@store');
// logincontroller controller route
Route::get('login','Auth\LoginController@login')->name('login');
Route::post('login','Auth\LoginController@authenticate');
Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::get('home','Auth\LoginController@home')->name('home');