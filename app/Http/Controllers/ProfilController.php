<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
use App\User;
class ProfilController extends Controller
{
	public function profile($id)
	{
		$karyawan = karyawan::where('id',$id)->first();
		$golongan = golongan::all();
		$jabatan = jabatan::all();
		$user = user::all();
		return view('karyawan.profil', compact('karyawan','user','golongan','jabatan'));
	}	
}
