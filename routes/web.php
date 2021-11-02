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
Route::get('login','authController@login')->name('login');
Route::post('postlogin','authController@postlogin');
Route::get('logout','authController@logout');
Route::get('daftar','authController@daftar');
Route::get('error','authController@error');
Route::post('simpandaftar','authController@simpandaftar');

Route::group(['middleware'=>'auth'],function(){
	Route::get('dashboard','dashboardController@index');
	Route::get('forum','forumController@index');
	Route::post('forum/simpan','forumController@simpan');
	Route::get('contact','dashboardController@contact');
	Route::get('profile/detail/{id}','profilController@detail');
	Route::get('profile/{id}','profilController@profile');
	Route::get('profile/edit/{id}','profilController@edit');
	Route::post('profile/update/{id}','profilController@update');
	Route::post('profile/simpanpend','profilController@simpanpend');
	Route::post('profile/simpanorg','profilController@simpanorg');
	Route::post('profile/simpankel','profilController@simpankel');
	Route::get('profile/keldestroy/{keluarga}','profilController@keldestroy');
	Route::get('profile/orgdestroy/{organisasi}','profilController@orgdestroy');
	Route::get('profile/penddestroy/{pendidikan}','profilController@penddestroy');
	Route::post('profile/account/{id}','profilController@account');
	Route::post('profile/simpanpeng','profilController@simpanpeng');
	Route::get('profile/pengdestroy/{pengalaman}','profilController@pengdestroy');
// Routes Karyawan
	Route::get('karyawan','karyawanController@index');
	Route::get('datakaryawan','karyawanController@datakaryawan');
	Route::post('karyawan/store','karyawanController@store');
	Route::get('karyawan/edit/{id}','karyawanController@edit');
	Route::post('karyawan/update/{id}','karyawanController@update');
	Route::post('karyawan/detailKaryawan','karyawanController@karyawanDetail');
	Route::get('karyawan/destroy/{id}','karyawanController@destroy');
	Route::get('karyawan/profil/{id}','karyawanController@profil');
	Route::get('karyawan/export','karyawanController@export');
// Routes Golongan
	Route::get('golongan','golonganController@index');
	Route::post('golongan/simpan','golonganController@simpan');
	Route::post('golongan/update/{golongan}','golonganController@update');
	Route::get('golongan/hapus/{golongan}','golonganController@delete');
	Route::get('golongan/export','golonganController@export');
// Routes Jabatan
	Route::get('jabatan','jabatanController@index');
	Route::post('jabatan/simpan','jabatanController@simpan');
	Route::post('jabatan/update/{jabatan}','jabatanController@update');
	Route::get('jabatan/hapus/{jabatan}','jabatanController@delete');
	Route::get('jabatan/export','jabatanController@export');
// Routes Cuti
	Route::get('cuti/{id}','cutiController@index');
	Route::post('cuti/store/{id}','cutiController@store');
// Routes Izin
	Route::get('izin/{id}','izinController@index');
	Route::post('izin/store/{id}','izinController@store');
	Route::post('izin/approve/{id}','izinController@approve')->name('approve');
// Routes mutasi
	Route::get('mutasi','mutasiController@index');
	Route::get('tabelmutasi','mutasiController@tabelmutasi');
	Route::get('tabelkaryawan','mutasiController@tabelkaryawan');
	Route::post('karyawandetail','mutasiController@karyawandetail');
	Route::post('mutasi/simpan','mutasiController@simpan');
	Route::post('mutasi/store/{id}','mutasiController@store');
//Routes SK
	Route::get('sk','skController@index');
	Route::get('skview','skController@view');
	Route::get('datask','skController@datask');
	Route::get('detailsk','skController@detailsk');
	Route::get('sk/downloadsk/{id}','skController@downloadsk')->name('downloadsk');
	Route::post('sk/simpan','skController@simpan');
	Route::post('sk/update/{sk}','skController@update');
	Route::get('sk/hapus/{id}','skController@hapus');
//Pembiayaan
	Route::get('pembiayaan','pembiayaanController@index');
	Route::get('pembiayaanview','pembiayaanController@pembiayaanview');
	Route::get('tabelpembiayaan','pembiayaanController@tabelpembiayaan');
	Route::post('pembiayaan/simpan','pembiayaanController@simpan');
	Route::post('pembiayaan/update/{id}','pembiayaanController@update');
	Route::get('pembiayaan/hapus/{id}','pembiayaanController@hapus')->name('hapus');
	Route::post('pembiayaan/arsip/{id}','pembiayaanController@arsip')->name('arsip');
	Route::post('pembiayaan/dipinjam/{id}','pembiayaanController@dipinjam')->name('dipinjam');
	Route::post('pembiayaan/wo/{id}','pembiayaanController@wo')->name('wo');
});