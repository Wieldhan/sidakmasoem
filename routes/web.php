<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
	return view('auths.login');
});
//Routes Auth
Route::get('login', 'authController@login')->name('login');
Route::post('postlogin', 'authController@postlogin');
Route::get('logout', 'authController@logout');
Route::get('daftar', 'authController@daftar');
Route::post('simpandaftar', 'authController@simpandaftar');


Route::get('dashboard', 'dashboardController@index');
Route::get('profil','profilController@index');

Route::group(['middleware'=>'auth'],function(){

// Routes Karyawan
	Route::get('karyawan', 'karyawanController@index');
	Route::post('/karyawan/store', 'karyawanController@store');
	Route::get('/karyawan/edit/{id}', 'karyawanController@edit');
	Route::post('/karyawan/update/{id}', 'karyawanController@update');
	Route::get('/karyawan/destroy/{id}', 'karyawanController@destroy');

// Routes Golongan
	Route::get('golongan', 'golonganController@index');
	Route::post('/golongan/simpan', 'golonganController@simpan');
	Route::post('/golongan/update/{golongan}', 'golonganController@update');
	Route::get('/golongan/hapus/{golongan}', 'golonganController@delete');

// Routes Jabatan
	Route::get('jabatan', 'jabatanController@index');
	Route::post('/jabatan/simpan', 'jabatanController@simpan');
	Route::post('/jabatan/update/{jabatan}', 'jabatanController@update');
	Route::get('/jabatan/hapus/{jabatan}', 'jabatanController@delete');

});