<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Golongan;
use App\Jabatan;
class AuthController extends Controller
{
	public function daftar()
	{
		$data_golongan = golongan::all();
		$data_jabatan = jabatan::all();
		return view('auths.daftar',['data_golongan'=>$data_golongan,'data_jabatan'=> $data_jabatan]);
	}
	public function login()
	{
		return view('auths.login');
	}

	public function postlogin(request $request)
	{
		
	}
}
