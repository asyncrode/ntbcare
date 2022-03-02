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

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Admin\Auth\AuthadminController@getLogin')->name('admin.login');
    Route::post('login', 'Admin\Auth\AuthadminController@postLogin')->name('adminpost.login');
    Route::post('logout', 'Admin\Auth\AuthadminController@postLogout')->name('adminpost.logout');


    Route::get('/dashboard', 'Admin\DashboardController@index')->middleware('auth:admin')->name('dashboard.index');
    Route::get('/pengaduan', 'Admin\PengaduanController@index')->middleware('auth:admin')->name('pengaduan.admin.index');
    Route::get('/detail/{id}', 'Admin\PengaduanController@detail')->middleware('auth:admin')->name('pengaduan.detailaduan');
    Route::delete('/delete/{id}', 'Admin\PengaduanController@delete')->middleware('auth:admin')->name('pengaduan.detailaduan.delete');

    Route::group(['prefix' => 'opd', 'middleware' => ['role:super-admin']], function () {
        Route::get('/', 'Admin\OpdController@index')->name('opd.index');
        Route::get('/getOpd', 'Admin\OpdController@getOpd')->name('opd.data');
        Route::get('/getUser', 'Admin\OpdController@getUser')->name('opd.getUser');
        Route::post('/store', 'Admin\OpdController@store')->name('opd.store');
        Route::get('/edit/{id}', 'Admin\OpdController@edit')->name('opd.edit');
        Route::put('/update/{id}', 'Admin\OpdController@update')->name('opd.update');
        Route::delete('/delete/{id}', 'Admin\OpdController@delete')->name('opd.delete');
    });

    Route::group(['prefix' => 'wilayah','middleware' => ['role:super-admin']],function(){
        Route::get('/','Admin\WilayahController@index')->name('wilayah.index');
        Route::get('/getWilayah','Admin\WilayahController@getWilayah')->name('wilayah.data');
        Route::get('/getOpd','Admin\WilayahController@getOpd')->name('wilayah.getOpd');
        Route::post('/store','Admin\WilayahController@store')->name('wilayah.store');
        Route::get('/edit/{id}','Admin\WilayahController@edit')->name('wilayah.edit');
        Route::put('/update/{id}','Admin\WilayahController@update')->name('wilayah.update');
        Route::delete('/delete/{id}','Admin\WilayahController@delete')->name('wilayah.delete');
    });

    Route::group(['prefix' => 'kecamatan','middleware' => ['role:super-admin']],function(){
        Route::get('/','Admin\KecamatanController@index')->name('kecamatan.index');
        Route::get('/getKecamatan','Admin\KecamatanController@getKecamatan')->name('kecamatan.data');
        Route::get('/getWilayah','Admin\KecamatanController@getWilayah')->name('kecamatan.getWilayah');
        Route::post('/store','Admin\KecamatanController@store')->name('kecamatan.store');
        Route::get('/edit/{id}','Admin\KecamatanController@edit')->name('kecamatan.edit');
        Route::put('/update/{id}','Admin\KecamatanController@update')->name('kecamatan.update');
        Route::delete('/delete/{id}','Admin\KecamatanController@delete')->name('kecamatan.delete');
    });

    Route::group(['prefix' => 'kelurahan','middleware' => ['role:super-admin']],function(){
        Route::get('/','Admin\KelurahanController@index')->name('kelurahan.index');
        Route::get('/getKelurahan','Admin\KelurahanController@getKelurahan')->name('kelurahan.data');
        Route::get('/getKecamatan','Admin\KelurahanController@getKecamatan')->name('kelurahan.getWilayah');
        Route::post('/store','Admin\KelurahanController@store')->name('kelurahan.store');
        Route::get('/edit/{id}','Admin\KelurahanController@edit')->name('kelurahan.edit');
        Route::put('/update/{id}','Admin\KelurahanController@update')->name('kelurahan.update');
        Route::delete('/delete/{id}','Admin\KelurahanController@delete')->name('kelurahan.delete');
    });

    Route::group(['prefix' => 'kategori','middleware' => ['role:super-admin']],function(){
        Route::get('/','Admin\KategoriController@index')->name('kategori.index');
        Route::get('/getKategori','Admin\KategoriController@getKategori')->name('kategori.data');
        Route::post('/store','Admin\KategoriController@store')->name('kategori.store');
        Route::get('/edit/{id}','Admin\KategoriController@edit')->name('kategori.edit');
        Route::put('/update/{id}','Admin\KategoriController@update')->name('kategori.update');
        Route::delete('/delete/{id}','Admin\KategoriController@delete')->name('kategori.delete');
    });

    Route::group(['prefix' => 'subkategori','middleware' => ['role:super-admin']],function(){
        Route::get('/','Admin\SubkategoriController@index')->name('subkategori.index');
        Route::get('/getSubkategori','Admin\SubkategoriController@getSubkategori')->name('subkategori.data');
        Route::get('/getKategori','Admin\SubkategoriController@getKategori')->name('subkategori.getKategori');
        Route::post('/store','Admin\SubkategoriController@store')->name('subkategori.store');
        Route::get('/edit/{id}','Admin\SubkategoriController@edit')->name('subkategori.edit');
        Route::put('/update/{id}','Admin\SubkategoriController@update')->name('subkategori.update');
        Route::delete('/delete/{id}','Admin\SubkategoriController@delete')->name('subkategori.delete');
    });
});
