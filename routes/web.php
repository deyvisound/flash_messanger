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
})->name('home');


Route::get('/success', 'FlashController@success')->name('success');
Route::get('/warning', 'FlashController@warning')->name('warning');
Route::get('/error', 'FlashController@error')->name('error');

Route::get('/t_success', 'FlashController@t_success')->name('t_success');
Route::get('/t_warning', 'FlashController@t_warning')->name('t_warning');
Route::get('/t_error', 'FlashController@t_error')->name('t_error');