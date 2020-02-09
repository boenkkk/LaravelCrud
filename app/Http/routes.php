<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Read
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/search','PegawaiController@search');

//Create
Route::get('/pegawai/add','PegawaiController@add');
Route::post('/pegawai/doAdd','PegawaiController@doAdd');

//Update
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/doEdit','PegawaiController@doEdit');

//Delete
Route::get('/pegawai/delete/{id}','PegawaiController@delete');
