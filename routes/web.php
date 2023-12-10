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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>lorem ipsum</h1>";
});

Route::get('blog', function () {
	return view('blog');
});
Route::get('landing', function () {
	return view('allinone');
});
Route::get('bootstrap', function () {
	return view('bootstrap');
});
Route::get('hello', function () {
	return view('hello');
});
Route::get('Ltree', function () {
	return view('Ltreeindex');
});
Route::get('js1', function () {
	return view('js1');
});
Route::get('js2', function () {
	return view('js2');
});
Route::get('responsive', function () {
	return view('responsive');
});
Route::get('permodan', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/lihat/{id}','App\Http\Controllers\PegawaiController@lihat');

Route::get('/nilaikuliah','App\Http\Controllers\nilaikuliahController@nilaikuliahindex');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\nilaikuliahController@tambahnilai');
Route::post('/nilaikuliah/storenilai','App\Http\Controllers\nilaikuliahController@storenilai');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@keranjangindex');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@storebelanja');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangController@batal');

Route::get('/topi','App\Http\Controllers\topiController@indextopi');
Route::get('/topi/tambah','App\Http\Controllers\topiController@tambahtopi');
Route::post('/topi/store','App\Http\Controllers\topiController@storetopi');
Route::get('/topi/edit/{kodetopi}','App\Http\Controllers\topiController@edittopi');
Route::post('/topi/update','App\Http\Controllers\topiController@updatetopi');
Route::get('/topi/hapus/{kodetopi}','App\Http\Controllers\topiController@hapustopi');
Route::get('/topi/lihat/{kodetopi}','App\Http\Controllers\topiController@lihattopi');
Route::get('/topi/cari','App\Http\Controllers\topiController@caritopi');
