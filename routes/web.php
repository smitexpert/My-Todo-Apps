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

Route::get('/', 'TasksController@index')->name('index');
Route::get('/add', 'TasksController@new')->name('add');
Route::post('/add', 'TasksController@store')->name('store');
Route::get('/edit/{id}', 'TasksController@edit')->name('edit');
Route::post('/edit/{id}', 'TasksController@update')->name('update');
Route::get('/delete/{id}', 'TasksController@delete')->name('delete');
Route::get('/priority/{id}', 'TasksController@priority')->name('priority');
