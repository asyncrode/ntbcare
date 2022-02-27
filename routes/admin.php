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

Route::group(['prefix' => 'admin'],function(){
    Route::get('login', 'Admin\Auth\AuthadminController@getLogin')->name('admin.login');
    Route::post('login', 'Admin\Auth\AuthadminController@postLogin')->name('adminpost.login');
    Route::post('logout', 'Admin\Auth\AuthadminController@postLogout')->name('adminpost.logout');

    
    Route::get('/dashboard','Admin\DashboardController@index')->middleware('auth:admin')->name('dashboard.index');
    Route::get('/pengaduan','Admin\PengaduanController@index')->middleware('auth:admin')->name('pengaduan.admin.index');
   
});
