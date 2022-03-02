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
});
