<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
use App\User;
class ProfilController extends Controller
{
	public function index()
	{
		$karyawan = karyawan::all();
		$golongan = golongan::all();
		$jabatan = jabatan::all();
		$user = jabatan::all();
		return view('karyawan.profil', compact('karyawan','user','golongan','jabatan'));
	}	
}
