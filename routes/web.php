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

//Route::get('/', function () {
	//return view('dashboard.index');
//})->name('dashboard');

Route::get('dashboard', function () {
	return view('dashboard.index');
})->name('dashboard');

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@store');

Route::get('auth', function () {
    return view('auth.login');
})->name('auth');

Route::get('gunung', ['as' => 'gunung.index', 'uses' => 'GunungController@index']);
Route::get('gunung/edit/{id_gunung}', ['as' => 'gunung.edit', 'uses' => 'GunungController@edit']);
Route::put('gunung/edit/{id_gunung}', ['as' => 'gunung.update', 'uses' => 'GunungController@update']);

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

Route::get('pengumuman', ['as' => 'pengumuman.index', 'uses' => 'PengumumanController@index']);
Route::get('pengumuman/create', ['as' => 'pengumuman.create', 'uses' => 'PengumumanController@create']);
Route::post('pengumuman', ['as' => 'pengumuman.store', 'uses' => 'PengumumanController@store']);
Route::get('pengumuman/edit/{id_pengumuman}', ['as' => 'pengumuman.edit', 'uses' => 'PengumumanController@edit']);
Route::put('pengumuman/edit/{id_pengumuman}', ['as' => 'pengumuman.update', 'uses' => 'PengumumanController@update']);
Route::get('pengumuman/delete/{id_pengumuman}', ['as' => 'pengumuman.delete', 'uses' => 'PengumumanController@delete']);

Route::get('berita', ['as' => 'berita.index', 'uses' => 'BeritaController@index']);
Route::get('berita/create', ['as' => 'berita.create', 'uses' => 'BeritaController@create']);
Route::post('berita', ['as' => 'berita.store', 'uses' => 'BeritaController@store']);
Route::get('berita/edit/{id_berita}', ['as' => 'berita.edit', 'uses' => 'BeritaController@edit']);
Route::put('berita/edit/{id_berita}', ['as' => 'berita.update', 'uses' => 'BeritaController@update']);
Route::get('berita/delete/{id_berita}', ['as' => 'berita.delete', 'uses' => 'BeritaController@delete']);

Route::get('galeri', ['as' => 'galeri.index', 'uses' => 'GaleriController@index']);
Route::get('galeri/create', ['as' => 'galeri.create', 'uses' => 'GaleriController@create']);
Route::post('galeri', ['as' => 'galeri.store', 'uses' => 'GaleriController@store']);
Route::get('galeri/edit/{id_galeri}', ['as' => 'galeri.edit', 'uses' => 'GaleriController@edit']);
Route::put('galeri/edit/{id_galeri}', ['as' => 'galeri.update', 'uses' => 'GaleriController@update']);
Route::get('galeri/delete/{id_galeri}', ['as' => 'galeri.delete', 'uses' => 'GaleriController@delete']);

Route::get('peraturan', ['as' => 'peraturan.index', 'uses' => 'PeraturanController@index']);
Route::get('peraturan/edit/{id_peraturan}', ['as' => 'peraturan.edit', 'uses' => 'PeraturanController@edit']);
Route::put('peraturan/edit/{id_peraturan}', ['as' => 'peraturan.update', 'uses' => 'PeraturanController@update']);

Route::get('konfigurasi_web', ['as' => 'konfigurasi_web.index', 'uses' =>'KonfigurasiWebController@index']);

Route::get('pendaki', ['as' => 'pendaki.index', 'uses' => 'PendakiController@index']);
Route::get('pendaki/create', ['as' => 'pendaki.create', 'uses' => 'PendakiController@create']);
Route::get('pendaki/cari', 'PendakiController@cari');
Route::get('pendaki/export_excel', 'PendakiController@export_excel');
Route::post('pendaki', ['as' => 'pendaki.store', 'uses' => 'PendakiController@store']);
Route::get('pendaki/edit/{id_pendaki}', ['as' => 'pendaki.edit', 'uses' => 'PendakiController@edit']);
Route::put('pendaki/edit/{id_pendaki}', ['as' => 'pendaki.update', 'uses' => 'PendakiController@update']);
Route::get('pendaki/delete/{id_pendaki}', ['as' => 'pendaki.delete', 'uses' => 'PendakiController@delete']);

Route::get('export', ['as' => 'export.index', 'uses' => 'ExportController@index']);

Route::get('konfigurasi_user', ['as' => 'konfigurasi_user.index', 'uses' => 'KonfigurasiUserController@index']);
Route::get('konfigurasi_user/create', ['as' => 'konfigurasi_user.create', 'uses' => 'KonfigurasiUserController@create']);
Route::post('konfigurasi_user', ['as' => 'konfigurasi_user.store', 'uses' => 'KonfigurasiUserController@store']);
Route::get('konfigurasi_user/edit/{id_user}', ['as' => 'konfigurasi_user.edit', 'uses' => 'KonfigurasiUserController@edit']);
Route::put('konfigurasi_user/edit/{id_user}', ['as' => 'konfigurasi_user.update', 'uses' => 'KonfigurasiUserController@update']);
Route::get('konfigurasi_user/delete/{id_user}', ['as' => 'konfigurasi_user.delete', 'uses' => 'KonfigurasiUserController@delete']);
