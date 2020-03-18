<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use RealRashid\SweetAlert\Facades\Alert;

class KaryawanController extends Controller
{
	public function index()
	{
		$data_karyawan = karyawan::all();
		return view('karyawan.index',['data_karyawan'=> $data_karyawan]);
	}
	public function simpan(Request $request)
	{
		$data_karyawan = karyawan::all();
		Karyawan::create([
			'nik' => $request->nik,
			'no_ktp' => $request->no_ktp,
			'username' => $request->username,
			'password' => $request->password,
			'nama' => $request->nama,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'agama' => $request->agama,
			'golongan' => $request->golongan,
			'jabatan' => $request->jabatan,
			'alamat' => $request->alamat,
			'no_telepon' => $request->no_telepon,
			'email' => $request->email
		]);
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return redirect('/karyawan');
	}
	public function delete($id)
	{
		$karyawan = karyawan::find($id);
		$karyawan->delete();
		alert()->success('SUCCES.','DATA BERHASIL DIHAPUS!');
		return redirect('/karyawan');

	}
}
