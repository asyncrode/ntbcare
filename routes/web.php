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
    return view('user.home');
})->name('landing');
Route::get('/pengaduan', 'User\PengaduanController@index')->name('pengaduan.index');
Route::get('/listaduan', 'User\ListaduanController@index')->name('listaduan.index');
Route::get('/pengaduanku', 'User\ListaduanController@listpengaduanku')->name('pengaduanku.index');
Route::get('/pengaduanku/{id}', 'User\ListaduanController@listaduan')->name('pengaduanku.detail');
Route::get('/untoldstory', 'User\HomeController@story')->name('user.story');

// Komentar
Route::post('/komentar','User\KomentarController@store')->name('user.komentar.store');

// Get Data
Route::get('/getData', 'User\PengaduanController@getData')->name('pengaduan.data');
Route::post('/getSubkategori', 'User\PengaduanController@getSubkategori')->name('pengaduan.subkategori');
Route::get('/getWilayah', 'User\PengaduanController@getWilayah')->name('pengaduan.wilayah');
Route::post('/getkecamatan', 'User\PengaduanController@getkecamatan')->name('pengaduan.kecamatan');
Route::post('/getKelurahan', 'User\PengaduanController@getKelurahan')->name('pengaduan.kelurahan');

// Post Data
Route::post('/store', 'User\PengaduanController@store')->name('pengaduan.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
