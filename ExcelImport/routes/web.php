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

Route::get('/tambah-data', 'ExcellController@create');
Route::get('/halaman-utama', 'ExcellController@index2');
Route::get('/nilai', 'ExcellController@index');
Route::post('/nilai', 'ExcellController@store');
Route::get('/mahasiswa', 'ExcellController@index3');
Route::get('/mahasiswa/nilai', 'ExcellController@excel');



Route::get('/nilai/export_excel', 'ExcellController@export_excel');
Route::post('/nilai/import_excel', 'ExcellController@import_excel');
