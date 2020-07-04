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

// Route::get('/', function () {
//     return view('welcome');
// });
//master
Route::get('/','MasterController@Master');
//latihan
Route::get('/items','ItemController@index');//menampilkan semua data
Route::post('/items','ItemController@store');//menyimpan data
Route::get('/items/create','ItemController@create');//menampilkan halaman form
Route::get('/items/{id}','ItemController@show');//menampilkan detail barang


//pertanyaan
Route::get('/pertanyaan','PertanyaanController@index');//menampilkan semua data
Route::post('/pertanyaan','PertanyaanController@store');//menyimpan data
Route::get('/pertanyaan/create','PertanyaanController@create');//menampilkan halaman form
Route::get('/pertanyaan/{id}','PertanyaanController@show');//menampilkan detail pertanyaan
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');//edit pertanyaan
Route::put('/pertanyaan/{id}','PertanyaanController@update');//menyimpan perubahan(edit)
Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');//menghapus data

//jawaban
Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');