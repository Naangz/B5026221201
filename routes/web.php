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
