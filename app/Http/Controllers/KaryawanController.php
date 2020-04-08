<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
use RealRashid\SweetAlert\Facades\Alert;

class KaryawanController extends Controller
{
	public function index()
	{
		$data_karyawan = karyawan::all();
		$data_golongan = golongan::all();
		$data_jabatan = jabatan::all();
		return view('karyawan.index',['data_karyawan'=> $data_karyawan, 'data_golongan'=>$data_golongan,'data_jabatan'=> $data_jabatan]);
	}
	public function simpan(Request $request)
	{
		$data_karyawan = karyawan::all();
		Karyawan::create([
			'nik' => $request->nik,
			'no_ktp' => $request->no_ktp,
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
	public function edit()
	{
		return view('karyawan.karEdit');
	}
	public function delete($id)
	{
		$karyawan = karyawan::find($id);
		$karyawan->delete();
		alert()->success('SUCCES.','DATA BERHASIL DIHAPUS!');
		return redirect('/karyawan');
	}
}
