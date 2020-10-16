<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
use App\User;
use App\Cabang;
use RealRashid\SweetAlert\Facades\Alert;

class KaryawanController extends Controller
{
	public function index()
	{
		if(Auth::user()->level == 'user') {
			Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
			return redirect()->to('/');
		}
		$karyawan = karyawan::all();
		$golongan = golongan::all();
		$jabatan = jabatan::all();
		$cabang = cabang::all();
		return view('karyawan.index', compact('karyawan','golongan','jabatan','cabang'));
	}
	public function profil($id)
	{
		$karyawan = karyawan::where('id',$id)->first();
		$golongan = golongan::all();
		$jabatan = jabatan::all();
		$user = user::all();
		return view('karyawan.profil', compact('karyawan','user','golongan','jabatan'));
	}

	public function karyawanDetail(request $request)
	{
		$id = $request->id;
		$detail = karyawan::where('id', $id)->first();
		$id_jab = $detail->jabatan_id;
		$jb = $detail->jabatan->jabatan;
		$jabatan = Jabatan::get();
		$data = array(
			'no_induk'     => $detail->nik,
			'no_ktp'       => $detail->no_ktp,
			'nama_lengkap' => $detail->nama_lengkap,
			'jk'           => $detail->jk,
			'id_jabat'     => $id_jab,
			'jb'           => $jb,
			'jabatan'      => $jabatan,
			'id'           => $id
		);
		return response()->json($data);
	}

	public function store(Request $request)
	{
		// Insert Tabel User
		$user = new User;
		$user->nama_lengkap =$request->nama_lengkap;
		$user->email =$request->email;
		$user->password = bcrypt($request['nik']);
		$user->remember_token = Str::random(50);
		$user->level ='member';
		$user->save();

		// Insert Tabel Karyawan
		$request->request->add(['user_id' => $user->id]);
		$karyawan = karyawan::create($request->all());
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return redirect('/karyawan');
	}
	public function edit($id)
	{
		//
	}

	public function update(Request $request, $id)
	{
		karyawan::findOrFail($id)->update($request->all());
		alert()->success('SUCCES.','DATA BERHASIL UPDATE!');
		return redirect('/karyawan');
	}
	
	public function destroy($id)
	{
		karyawan::findOrFail($id)->delete();
		user::findOrFail($id)->delete();
		alert()->success('SUCCES.','DATA BERHASIL DIHAPUS!');
		return redirect('/karyawan');
	}
}
