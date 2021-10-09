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


Route::get('/home', 'HomeController@index');

Route::get('/dosen','DosenController@index');
Route::get('/formdosen','DosenController@form');
Route::post('/createdosen','DosenController@create');
Route::get('/dosenedit{id}','DosenController@edit')->name('dosenedit');
Route::post('dosenupdate{id}','DosenController@update')->name('dosenupdate');
Route::post('dosen/delete','DosenController@delete')->name('dosen.delete');

Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/formmahasiswa','MahasiswaController@form');
Route::post('/createmahasiswa','MahasiswaController@create');
Route::get('/mahasiswaedit{id}','MahasiswaController@edit')->name('mahasiswaedit');
Route::post('mahasiswaupdate{id}','MahasiswaController@update')->name('mahasiswaupdate');
Route::post('mahasiswa/delete','MahasiswaController@delete')->name('mahasiswa.delete');

Route::get('/fakultas','FakultasController@index');
Route::get('/formfakultas','FakultasController@form');
Route::post('/createfakultas','FakultasController@create');
Route::get('/fakultasedit{id}','FakultasController@edit')->name('fakultasedit');
Route::post('update{id}','FakultasController@update')->name('update');
Route::post('/fakultas/delete','FakultasController@delete')->name('fakultas.delete');

Route::get('/prodi','ProdiController@index');
Route::get('/formprodi','ProdiController@form');
Route::post('/createprodi','ProdiController@create');
Route::get('/prodiedit{id}','ProdiController@edit')->name('prodiedit');
Route::post('prodiupdate{id}','ProdiController@update')->name('prodiupdate');
Route::post('prodi/delete','ProdiController@delete')->name('prodi.delete');

Route::get('/lokasi','LokasiController@index');
Route::get('/formlokasi','LokasiController@form');
Route::post('/createlokasi','LokasiController@create');
Route::get('/lokasiedit{id}','LokasiController@edit')->name('lokasiedit');
Route::post('lokasiupdate{id}','LokasiController@update')->name('lokasiupdate');
Route::post('lokasi/delete','LokasiController@delete')->name('lokasi.delete');

Route::get('/kelompok','KelompokController@index');
Route::get('/formkelompok','KelompokController@form');
Route::post('/createkelompok','KelompokController@create');
Route::get('/kelompokedit{id}','KelompokController@edit')->name('kelompokedit');
Route::post('kelompokupdate{id}','KelompokController@update')->name('kelompokupdate');
Route::post('kelompok/delete','KelompokController@delete')->name('kelompok.delete');

Route::get('/kegiatan','KegiatanController@index');
Route::get('/formkegiatan','KegiatanController@form');
Route::post('/createkegiatan','KegiatanController@create');
Route::get('/kegiatanedit{id}','KegiatanController@edit')->name('kegiatanedit');
Route::post('kegiatanupdate{id}','KegiatanController@update')->name('kegiatanupdate');
Route::post('kegiatan/delete','KegiatanController@delete')->name('kegiatan.delete');

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
