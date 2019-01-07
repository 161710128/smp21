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
    return view('index');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
    Route::resource('eskul','EskulController');
    Route::resource('galeri','GaleriController');
    Route::resource('kategorigaleri','KategorigaleriController');
    Route::resource('artikel','ArtikelController');
    Route::resource('kategoriartikel','KategoriartikelController');
    Route::resource('jabatan','JabatanController');
    Route::resource('guru','GuruController');
    Route::resource('staf','StafController');
    Route::resource('kategorifasilitas','KategorifasilitasController');
    Route::resource('tag','TagController');
    Route::resource('fasilitas','FasilitasController');
});


Route::get('/artikel','FrontendController@artikel')->name('artikel');
Route::get('/single/{artikel}','FrontendController@single')->name('single');