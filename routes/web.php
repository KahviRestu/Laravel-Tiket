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


Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::get('/register','AuthController@register');
Route::post('/create','AuthController@create');

Route::group(['middleware' => ['auth','checkRole:user']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/dashboard/pemesanan/{id}','DashboardController@pemesanan');
    Route::post('/dashboard/pesantiket/{id}','DashboardController@pesanTiket');
    Route::get('/cekTiket','DashboardController@cekTiket');
    Route::get('/cekTiket/delete/{id}','DashboardController@hapus');
    Route::get('/cekTiket/bayar/{id}','DashboardController@bayar');
    Route::post('/cekTiket/bayarTiket/{id}','DashboardController@bayarTiket');
});

Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::get('/bis','BisController@index');
    Route::post('/bis/tambah','BisController@tambah');
    Route::get('/bis/delete/{id}','BisController@hapus');
    Route::get('/bis/edit/{id}','BisController@edit');
    Route::post('/bis/update/{id}','BisController@update');

    Route::get('/jadwal','JadwalController@index');
    Route::post('/jadwal/tambah','JadwalController@tambah');
    Route::get('/jadwal/edit/{id}','JadwalController@edit');
    Route::post('/jadwal/update/{id}','JadwalController@update');
    Route::get('/jadwal/delete/{id}','JadwalController@hapus');

    Route::get('/pemesanan','PemesananController@index');
});
    

