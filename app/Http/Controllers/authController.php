<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Jabatan;
use App\Golongan;
use App\Karyawan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Validator;
use RealRashid\SweetAlert\Facades\Alert;
class AuthController extends Controller
{
	public function login()
	{
		return view('auths.login');
	}

	public function error()
	{
		return view('auths.error');
	}

	public function postlogin(request $request)
	{
		if(Auth::attempt($request->only('email','password'))){
			return redirect('/dashboard');
		}
		toast()->warning('Email Atau Password Salah!');
		return redirect('/login');
	}

	public function logout()
	{
		Auth::logout();
		toast()->info('You Have Been Logout From System');
		return redirect('/login');
	}

	public function simpandaftar(Request $request)
	{
		$this->validate($request, [
			'nik'           => 'required|string|unique:karyawan,nik',
			'no_ktp'        => 'required|string|unique:karyawan,no_ktp',
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
			'email'         => 'required|email|unique:user,email'
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
		toast()->success('DATA BERHASIL DITAMBAHKAN!');
		return redirect('/login');
	}
}