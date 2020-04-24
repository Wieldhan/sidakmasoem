<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
	public function index()
	{
		$karyawan = karyawan::all();
		$golongan = golongan::all();
		$jabatan = jabatan::all();
		$user = jabatan::all();
		return view('karyawan.index', compact('karyawan','user','golongan','jabatan'));
	}

	
}
