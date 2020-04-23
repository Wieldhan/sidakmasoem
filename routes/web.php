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
route::get('/login', 'authController@login')->name('login');
route::post('/postlogin', 'authController@postlogin');
route::get('logout', 'authController@logout');
route::get('/daftar', 'authController@daftar');
route::post('/simpandaftar', 'authController@simpandaftar');

route::group(['middleware'=>'auth'],function(){

	route::get('/dashboard', 'dashboardController@index');
// Routes Karyawan
	// route::resource('karyawan','karyawanController');
	route::get('/karyawan', 'karyawanController@index');
	route::post('/karyawan/store', 'karyawanController@store');
	route::get('/karyawan/edit/{id}', 'karyawanController@edit');
	route::post('/karyawan/update/{id}', 'karyawanController@update');
	route::get('/karyawan/destroy/{id}', 'karyawanController@destroy');

// Routes Golongan
	route::get('golongan', 'golonganController@index');
	route::post('/golongan/simpan', 'golonganController@simpan');
	route::post('/golongan/update/{id}', 'golonganController@update');
	route::get('/golongan/hapus/{id}', 'golonganController@delete');

// Routes Jabatan
	route::get('jabatan', 'jabatanController@index');
	route::post('/jabatan/simpan', 'jabatanController@simpan');
	route::post('/jabatan/update/{jabatan}', 'jabatanController@update');
	route::get('/jabatan/hapus/{jabatan}', 'jabatanController@delete');

});