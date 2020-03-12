<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
	public function index()
	{
		$data_karyawan = \App\karyawan::all();
		return view('karyawan.index',['data_karyawan'=> $data_karyawan]);
	}
	public function create(Request $request)
	{
		return $request->all();
		// \App\karyawan::create($request->all());
	}
}
