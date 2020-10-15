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
		return view('karyawan.index', compact('karyawan', 'golongan','jabatan','cabang'));
	}
	public function profil($id)
	{
		$karyawan = karyawan::where('id',$id)->first();
		$golongan = golongan::all();
		$jabatan = jabatan::all();
		$user = user::all();
		return view('karyawan.profil', compact('karyawan','user','golongan','jabatan'));
	}

	/*public function detail(Request $request)
	{
		$det    = DPemakaian::where('no_pemakaian', $request->pemakaian)
		->get();
		$data   = array();
		$no     = 0;
		foreach ($det as $details) {
			$data[ $no ]['id']          = $details->id;
			$data[ $no ]['kode_barang'] = $details->Persediaan->kode_barang;
			$data[ $no ]['nama_barang'] = $details->Persediaan->Barang->nama_barang;
			$no++;
		}
		return response()->json($data);
	}*/

	public function karyawanDetail(request $request)
	{
		$detail = karyawan::where('jabatan_id', $request->id)->get();
		$data = array();
		$no = 0;
		foreach ($detail as $details){
			$data [$no]['id']            = $details->id;
			$data [$no]['user_id']       = $details->user_id;
			$data [$no]['golongan_id']   = $details->golongan_id;
			$data [$no]['jabatan_id']    = $details->jabatan_id;
			$data [$no]['cabang_id']     = $details->cabang_id;
			$data [$no]['nik']           = $details->nik;
			$data [$no]['no_ktp']        = $details->no_ktp;
			$data [$no]['nama_lengkap']  = $details->nama_lengkap;
			$data [$no]['jk']            = $details->jk;
			$data [$no]['agama']         = $details->agama;
			$data [$no]['tempat_lahir']  = $details->tempat_lahir;
			$data [$no]['tanggal_lahir'] = $details->tanggal_lahir;
			$data [$no]['status_nikah']  = $details->status_nikah;
			$data [$no]['no_telepon']    = $details->no_telepon;
			$data [$no]['alamat']        = $details->alamat;
			$data [$no]['visi']          = $details->visi;
			$data [$no]['misi']          = $details->misi;
			$no++;
		}
		return response()->json($data);
	}

	/*public function karyawanDetail(request $request)
	{
		$id = $request->id;
		$data = karyawan::valid()->find($id);
		$output =[
			'id'            => $data->id,
			'user_id'       => $data->user_id,
			'golongan_id'   => $data->golongan_id,
			'jabatan_id'    => $data->jabatan_id,
			'cabang_id'     => $data->cabang_id,
			'nik'           => $data->nik,
			'no_ktp'        => $data->no_ktp,
			'nama_lengkap'  => $data->nama_lengkap,
			'jk'            => $data->jk,
			'agama'         => $data->agama,
			'tempat_lahir'  => $data->tempat_lahir,
			'tanggal_lahir' => $data->tanggal_lahir,
			'status_nikah'  => $data->status_nikah,
			'no_telepon'    => $data->no_telepon,
			'alamat'        => $data->alamat,
			'visi'          => $data->visi,
			'misi'          => $data->misi
		];
		echo json_encode($output);
	}*/

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
