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
	return view('welcome');
});

route::get('/admin', 'adminController@index');
route::get('master', 'masterController@index');

// Routes Karyawan
route::get('/karyawan', 'karyawanController@index');
route::post('/karyawan/simpan', 'karyawanController@simpan');
route::get('karyawan/edit/{id}', 'karyawanController@update');
route::get('karyawan/hapus/{id}', 'karyawanController@delete');