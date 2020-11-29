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

Route::get('/','HomeController@index');
Route::get('/layout','HomeController@layout')->name('layout');
Route::get('/users','HomeController@users')->name('users');
Route::get('/buttons','HomeController@buttons')->name('buttons');
Route::get('/cards','HomeController@users')->name('cards');
Route::get('/skills','HomeController@skills')->name('skills');
Route::get('/awards','HomeController@awards')->name('awards');
Route::get('/projects','HomeController@projects')->name('projects');
Route::get('/ebooks','HomeController@ebooks')->name('ebooks');
Route::get('/notes','HomeController@notes')->name('notes');
Route::get('/novels','HomeController@novels')->name('novels');
Route::get('/midtest','HomeController@midtest')->name('midtest');
Route::get('/finaltest','HomeController@finaltest')->name('finaltest');
Route::get('/improvement','HomeController@improvement')->name('improvement');
Route::get('/schedule','HomeController@schedule')->name('schedule');

Route::resource('category', 'CategoryController');
