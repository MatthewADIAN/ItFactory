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

Route::get('/lowongan/show', 'LowonganController@show');
Route::get('/lowongan/insert', 'LowonganController@insert');
Route::post('/lowongan/save', 'LowonganController@save');
Route::get('/lowongan/delete/{id}', 'LowonganController@delete');
Route::get('/lowongan/edit/{id}', 'LowonganController@edit');
Route::post('/lowongan/ubah', 'LowonganController@ubah');
Route::get('/lowongan/daftar', 'LowonganController@daftar');
Route::post('/lowongan/saveDaftar', 'LowonganController@saveDaftar');


Route::get('/produk/show' ,'ProdukController@show');
Route::get('/produk/insert' ,'ProdukController@insert');
Route::post('/produk/save' ,'ProdukController@save');
Route::get('/produk/delete/{id}' ,'ProdukController@delete');
Route::get('/produk/edit/{id}' ,'ProdukController@edit');
Route::post('/produk/ubah' ,'ProdukController@ubah');
Route::get('/produk/tampil' ,'BelanjaController@tampil');
Route::post('/produk/simpan','BelanjaController@simpan');


