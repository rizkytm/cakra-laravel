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

Auth::routes();

Route::get('/homes', 'HomeController@index')->name('home');
Route::get('/home', 'PostController@index')->name('beranda');
Route::get('/create', 'PostController@create')->name('create');
Route::get('/show/{id}', 'PostController@show')->name('show');
Route::delete('/home/{id}/delete', 'PostController@destroy')->name('post.destroy');
Route::post('/create', 'PostController@store')->name('store');
Route::get('/show/{id}/edit', 'PostController@edit')->name('edit');
Route::patch('/show/{id}/update', 'PostController@update')->name('update');
Route::post('/show/{id}/comment', 'PostController@comment')->name('comment');
Route::delete('/show/{id}/comdelete', 'PostController@delcom')->name('comment.destroy');

Route::get('/referensi', 'ReferensiController@index')->name('referensi');
Route::get('/refcreate', 'ReferensiController@create')->name('referensi.create');
Route::post('/refcreate', 'ReferensiController@store')->name('referensi.store');
Route::get('/refshow/{id}', 'ReferensiController@show')->name('show.referensi');
Route::get('/referensi/{id}/editref', 'ReferensiController@editref')->name('edit.ref');
Route::patch('/refedit/{id}/updatereferensi', 'ReferensiController@updateref')->name('update.ref');
Route::delete('/referensi/{id}/delete', 'ReferensiController@destroy')->name('referensi.destroy');
Route::post('/refshow/{id}', 'ReferensiController@refstore')->name('unsur.store');
Route::get('/refedit/{id}', 'ReferensiController@refedit')->name('edit.ui');
Route::patch('/refedit/{id}/edit', 'ReferensiController@updateui')->name('update.ui');
Route::delete('/refshow/{id}/delete', 'ReferensiController@destroyui')->name('destroy.ui');

Route::get('/berita', 'BeritaController@index')->name('berita');
Route::get('/buat/berita', 'BeritaController@create')->name('buat.berita');
Route::post('/buat/berita', 'BeritaController@store')->name('berita.store');
Route::get('/show/berita/{id}', 'BeritaController@show')->name('show.berita');
Route::get('/berita/edit/{id}', 'BeritaController@edit')->name('edit.berita');
Route::patch('/berita/{id}/edit', 'BeritaController@update')->name('update.berita');
Route::delete('/berita/{id}/delete', 'BeritaController@destroy')->name('berita.destroy');