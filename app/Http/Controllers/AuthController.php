<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Validator;
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
		alert()->warning('Email Atau Password Salah!');
		return redirect('/login');
	}

	public function logout()
	{
		Auth::logout();
		alert()->info('Info','You Have Been Logout From System');
		return redirect('/login');
	}

	public function simpandaftar(Request $request)
	{
		$this->validate($request, [
			'nik'           => 'required|string',
			'no_ktp'        => 'required|string',
			'nama_lengkap'  => 'required|string',
			'jk'            => 'required',
			'agama'         => 'required|string',
			'status_nikah'  => 'required|string',
			'tempat_lahir'  => 'required',
			'tanggal_lahir' => 'required',
			'no_telepon'    => 'required',
			'alamat'        => 'required|string',
			'visi'          => 'required|string',
			'misi'          => 'required|string',
			'email'         => 'required|email'
		]);

		// Insert Tabel User
		$user = new User;
		$user->nama_lengkap =$request->nama_lengkap;
		$user->email =$request->email;
		$user->password = bcrypt($request['nik']);
		$user->remember_token = Str::random(50);
		$user->level ='user';
		$user->save();

		// Insert Tabel Karyawan
		$request->request->add(['user_id' => $user->id]);
		$karyawan = karyawan::create($request->all());

		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return redirect('/login');
	}
}
