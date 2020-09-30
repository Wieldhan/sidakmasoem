<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
use App\User;
use App\Pendidikan;
use App\Organisasi;
use Auth;
use DB;
use Session;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
	public function profile($id)
	{
		if(Auth::user()->level == 'user') {
			Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
			return redirect()->to('/');
		}

		$karyawan   = karyawan::where('user_id',$id)->first();
		$golongan   = golongan::all();
		$jabatan    = jabatan::all();
		$user       = user::all();
		$pendidikan = pendidikan::where('user_id',$id)->get();
		$organisasi = organisasi::where('user_id',$id)->get();
		return view('karyawan.profil', compact('karyawan','user','golongan','jabatan','pendidikan','organisasi'));
	}
	public function simpanpend(Request $request)
	{
		pendidikan::create([
			'user_id'       => Auth::user()->id,
			'nik'           => $request->input('nik'),
			'nama_instansi' => $request->input('nama_instansi'),
			'jurusan'       => $request->input('jurusan'),
			'jenjang'       => $request->input('jenjang'),
			'tahun_lulus'   => $request->input('tahun_lulus')
		]);

		alert()->success('Data Berhasil Ditambahkan!');
		return back();
	}
	public function penddestroy(pendidikan $pendidikan)
	{
		$pendidikan->delete();
		alert()->success('SUCCES.','Data Berhasil Dihapus!');
		return back();
	}
	public function simpanorg(Request $request)
	{
		organisasi::create([
			'user_id'     => Auth::user()->id,
			'nama_org'    => $request->input('nama_org'),
			'jabatan_org' => $request->input('jabatan_org'),
			'periode_org' => $request->input('periode_org'),
			'status_org'  => $request->input('status_org')
		]);
		
		alert()->success('Data Berhasil Ditambahkan!');
		return back();
	}
	public function orgdestroy(organisasi $organisasi)
	{
		$organisasi->delete();
		alert()->success('Data Berhasil Dihapus!');
		return back();
	}
	public function edit($id)
	{
		# code...
	}	
	public function update(Request $request, $id)
	{
		user::findOrFail($id)->update($request->all());
		alert()->success('Data Berhasil Diupdate!');
		return back();
	}
	public function account(request $request, $id)
	{
		$user_data = User::findOrFail($id);
		if($request->file('avatar')) {
			$file     = $request->file('avatar');
			$dt       = Carbon::now();
			$acak     = $file->getClientOriginalExtension();
			$fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
			$request->file('avatar')->move("images/avatars", $fileName);
			$user_data->avatar   = $fileName;
		}
		$user_data->email  = $request->input('email');
		if($request->input('password')) {
			$user_data->password = bcrypt(($request->input('password')));
		}
		$user_data->update();
		alert()->success('Data Berhasil Diupdate!');
		return back();
	}
}