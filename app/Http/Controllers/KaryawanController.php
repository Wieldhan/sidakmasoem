<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Validator;
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
		$jabatan  = jabatan ::all();
		$cabang   = cabang  ::all();
		return view('karyawan.index', compact('karyawan','golongan','jabatan','cabang'));
	}

	public function datakaryawan(Request $request)
	{
		$DtKaryawan = Karyawan::all();
		return datatables()->of($DtKaryawan)
		->addColumn('golongan', function($DtKaryawan){
			return $DtKaryawan->golongan->golongan;
		})
		->addColumn('jabatan', function($DtKaryawan){
			return $DtKaryawan->jabatan->jabatan;
		})
		->addColumn('cabang', function($DtKaryawan){
			return $DtKaryawan->cabang->cabang;
		})
		->addColumn('action', function($DtKaryawan){
			return
			// "<button type='button' class='btn btn-sm btn-warning edit' data-id='".$DtKaryawan->id."'>Edit</button>
			"<button type='button' class='btn btn-sm btn-danger hapus' karyawan-id='".$DtKaryawan->id."'>Delete</button>";
		})
		->toJson();
	}
	public function profil($id)
	{
		$karyawan = karyawan::where('id',$id)->first();
		$golongan = golongan::all();
		$jabatan  = jabatan::all();
		$user     = user::all();
		return view('karyawan.profil', compact('karyawan','user','golongan','jabatan'));
	}

	// public function karyawanDetail(request $request)
	// {
	// 	$id       = $request->id;
	// 	$detail   = Karyawan::where('id', $id)->first();
	// 	$id_jab   = $detail->jabatan_id;
	// 	$id_gol   = $detail->golongan_id;
	// 	$id_cab   = $detail->cabang_id;
	// 	$jb       = $detail->jabatan->jabatan;
	// 	$gol      = $detail->golongan->golongan;
	// 	$cab      = $detail->cabang->cabang;
	// 	$jabatan  = Jabatan::get();
	// 	$golongan = Golongan::get();
	// 	$cabang   = Cabang::get();
	// 	$data     = Array(
	// 		'id'           => $id,
	// 		'no_induk'     => $detail->nik,
	// 		'no_ktp'       => $detail->no_ktp,
	// 		'nama_lengkap' => $detail->nama_lengkap,
	// 		'jk'           => $detail->jk,
	// 		'id_jabat'     => $id_jab,
	// 		'id_gol'       => $id_gol,
	// 		'id_cab'       => $id_cab,
	// 		'jb'           => $jb,
	// 		'gol'          => $gol,
	// 		'cab'          => $cab,
	// 		'jabatan'      => $jabatan,
	// 		'golongan'     => $golongan,
	// 		'cabang'       => $cabang
	// 	);
	// 	return response()->json($data);
	// }

	// public function store(Request $request)
	// {
	// 	// Insert Tabel User
	// 	$validator = Validator::make($request->all(),[
	// 		'nik'           => 'required|string',
	// 		'no_ktp'        => 'required|string',
	// 		'nama_lengkap'  => 'required|string',
	// 		'jk'            => 'required',
	// 		'agama'         => 'required|string',
	// 		'status_nikah'  => 'required|string',
	// 		'tempat_lahir'  => 'required',
	// 		'tanggal_lahir' => 'required',
	// 		'no_telepon'    => 'required|max:20',
	// 		'alamat'        => 'required|string',
	// 		'visi'          => 'required|string',
	// 		'misi'          => 'required|string',
	// 		'email'         => 'required|email'
	// 	]);

	// 	if($validator->passes()){
	// 		$user                 = new User;
	// 		$user->nama_lengkap   = $request->nama_lengkap;
	// 		$user->email          = $request->email;
	// 		$user->password       = bcrypt($request['nik']);
	// 		$user->remember_token = Str::random(50);
	// 		$user->level          ='member';
	// 		$user->save();

	// 	// Insert Tabel Karyawan
	// 		$request->request->add(['user_id' => $user->id]);
	// 		$karyawan = karyawan::create($request->all());
	// 		toast()->success('Data Berhasil Ditambahkan!');
	// 		return redirect('/karyawan');
	// 	}else{
	// 		toast()->warning('Data Gagal Ditambahkan!');
	// 		return redirect('/karyawan');
	// 	}
	// }
	// public function edit($id)
	// {
	// 	//
	// }

	public function destroy($id)
	{
		karyawan::findOrFail($id)->delete();
		user::findOrFail($id)->delete();
		toast()->success('Data Berhasil DiHapus!');
		return redirect('/karyawan');
	}
}
