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




Route::get('/master',function(){
	return view('adminlte.master');
});

Route::get('/pertanyaan/add','StackController@add')->middleware('auth');
Route::post('/pertanyaan','StackController@save');
Route::get('/pertanyaan','StackController@content')->middleware('auth');
Route::post('/jawaban','StackController@jawabansave');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile')->name('profile');