<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use App\User;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
class AuthController extends Controller
{
	public function login()
	{
		return view('auths.login');
	}

	public function postlogin(request $request)
	{
		if(Auth::attempt($request->only('email','password'))){
			return redirect('/dashboard');
		}
		alert()->warning('ERROR.','Email Atau Password Salah!');
		return redirect('/login');
	}

	public function logout()
	{
		Auth::logout();
		return redirect('/login');
	}

	public function simpandaftar(Request $request)
	{
		// Insert Tabel User
		$user = new User;
		$user->nama_lengkap =$request->nama_lengkap;
		$user->email =$request->email;
		$user->password = bcrypt('27061973');
		$user->remember_token = Str::random(50);
		$user->level ='member';
		$user->save();

		// Insert Tabel Karyawan
		$request->request->add(['user_id' => $user->id]);
		$karyawan = karyawan::create($request->all());
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return redirect('/login');
	}
}
