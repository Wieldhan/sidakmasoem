<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
use App\User;
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
		// Insert Tabel User
		$user = new User;
		$user->nama_panggilan =$request->nama_panggilan;
		$user->email =$request->email;
		$user->password = bcrypt('27061973');
		$user->remember_token = Str::random(50);
		$user->level ='member';
		$user->save();

		// Insert Tabel Karyawan
		$request->request->add(['user_id' => $user->id]);
		$karyawan = karyawan::create($request->all());
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return redirect('/karyawan');
	}
	public function edit()
	{
		return view('karyawan.karEdit');
	}
	public function delete($id)
	{
		$user = user::find($id);
		$user->delete();
		$karyawan = karyawan::find($id);
		$karyawan->delete();
		alert()->success('SUCCES.','DATA BERHASIL DIHAPUS!');
		return redirect('/karyawan');
	}
}
