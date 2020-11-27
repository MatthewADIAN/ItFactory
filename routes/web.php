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


Route::get('/produk/show' ,'ProdukController@show');