<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
use App\User;
use App\Pendidikan;
use App\Organisasi;
class ProfilController extends Controller
{
	public function profile($id)
	{
		$karyawan = karyawan::where('id',$id)->first();
		$golongan = golongan::all();
		$jabatan = jabatan::all();
		$user = user::all();
		$pendidikan = pendidikan::all();
		$organisasi = organisasi::all();
		return view('karyawan.profil', compact('karyawan','user','golongan','jabatan','pendidikan','organisasi'));
	}
	public function simpanpend(Request $request)
	{
		pendidikan::create($request->all());
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return back();
	}
	public function simpanorg(Request $request)
	{
		organisasi::create($request->all());
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return back();
	}
	public function edit($id)
	{
		# code...
	}	
	public function update(Request $request, $id)
	{
		# code...
	}
}
