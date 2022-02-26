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
});
Route::get('/pengaduan','User\PengaduanController@index')->name('pengaduan.index');

// Get Data
Route::get('/getKategori','Admin\KategoriController@getKategori')->name('kategori.data');
Route::get('/getKecamatan','Admin\KecamatanController@getKecamatan')->name('kecamatan.data');
Route::get('/getKelurahan','Admin\KelurahanController@getKelurahan')->name('kelurahan.data');
Route::get('/getSubkategori','Admin\SubkategoriController@getSubkategori')->name('subkategori.data');
Route::get('/getWilayah','Admin\WilayahController@getWilayah')->name('wilayah.data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
