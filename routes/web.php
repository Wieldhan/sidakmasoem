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
	return view('home');
});
route::get('/login', 'authController@login');
route::post('/postlogin', 'authController@postlogin');
route::get('/dashboard', 'dashboardController@index');

// Routes Karyawan
route::get('/karyawan', 'karyawanController@index');
route::post('/karyawan/simpan', 'karyawanController@simpan');
route::get('/karyawan/edit/{id}', 'karyawanController@edit');
route::post('/karyawan/update/{id}', 'karyawanController@update');
route::get('/karyawan/hapus/{id}', 'karyawanController@delete');

// Routes Golongan
route::get('golongan', 'golonganController@index');
route::post('/golongan/simpan', 'golonganController@simpan');
route::get('/golongan/{id}/edit', 'golonganController@edit');
route::post('/golongan/{id}/update', 'golonganController@update');
route::get('/golongan/{id}/hapus', 'golonganController@delete');
