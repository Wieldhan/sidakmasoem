<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Session;
use App\User;
use App\Mutasi;
use App\Jabatan;
use App\Golongan;
use App\Karyawan;
use App\Keluarga;
use Carbon\Carbon;
use App\Organisasi;
use App\Pendidikan;
use App\Pengalaman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
	 public function profile($id)
	 {
		  $karyawan   = karyawan  ::where('user_id', $id)->first();
		  $golongan   = golongan  ::all();
		  $jabatan    = jabatan   ::all();
		  $user       = user      ::all();
		  $pendidikan = pendidikan::where('user_id', $id)->get();
		  $organisasi = organisasi::where('user_id', $id)->get();
		  $pengalaman = pengalaman::where('user_id', $id)->get();
		  $keluarga   = keluarga::where('user_id', $id)->get();
		  $mutasi     = Mutasi    ::where('karyawan_id', $id)->get();
		  return view('karyawan.profil', compact('karyawan', 'user', 'golongan', 'jabatan', 'pendidikan', 'organisasi', 'pengalaman', 'mutasi','keluarga'));
	 }

	 public function detail($id)
    {
      $karyawan = karyawan  ::where('user_id', $id)->first();
		$golongan   = golongan  ::all();
		$jabatan    = jabatan   ::all();
		$user       = user      ::where('id',$id)->get();
		$pendidikan = pendidikan::where('user_id', $id)->get();
		$organisasi = organisasi::where('user_id', $id)->get();
		$pengalaman = pengalaman::where('user_id', $id)->get();
		$keluarga   = keluarga  ::where('user_id', $id)->get();
		$mutasi     = Mutasi    ::where('karyawan_id', $id)->get();
		return view('karyawan.detail', compact('karyawan', 'user', 'golongan', 'jabatan', 'pendidikan', 'organisasi', 'pengalaman', 'mutasi','keluarga'));
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

		  toast()->success('Data Berhasil Ditambahkan!');
		  return back();
	 }
	 public function penddestroy(pendidikan $pendidikan)
	 {
		  $pendidikan->delete();
		  toast()->success('Data Berhasil Dihapus!');
		  return back();
	 }
	 public function simpanorg(Request $request)
	 {
		  organisasi::create([
				'user_id'     => Auth::user()->id,
				'nik'         => $request->input('nik'),
				'nama_org'    => $request->input('nama_org'),
				'jabatan_org' => $request->input('jabatan_org'),
				'periode_org' => $request->input('periode_org'),
				'status_org'  => $request->input('status_org')
		  ]);
		  
		  toast()->success('Data Berhasil Ditambahkan!');
		  return back();
	 }
	 public function orgdestroy(organisasi $organisasi)
	 {
		  $organisasi->delete();
		  toast()->success('Data Berhasil Dihapus!');
		  return back();
	 }

	 public function simpanpeng(request $request)
	 {
		  pengalaman::create([
				'user_id'       => auth::user()->id,
				'nik'           => $request->input('nik'),
				'nama_pr'       => $request->input('nama_pr'),
				'jabatan_pr'    => $request->input('jabatan_pr'),
				'th_masuk'      => $request->input('th_masuk'),
				'th_keluar'     => $request->input('th_keluar'),
				'alasan_resign' => $request->input('alasan_resign')
		  ]);
		  toast()->success('Data Berhasil Ditambahkan!');
		  return back();
	 }

	 public function pengdestroy(pengalaman $pengalaman)
	 {
		  $pengalaman->delete();
		  toast()->success('Data Berhasil Dihapus!');
		  return back();
	 }
	 public function simpankel(request $request)
	 {
		  keluarga::create([
				'user_id'       => auth::user()->id,
				'nama_keluarga' => $request->input('nama_keluarga'),
				'status'        => $request->input('status'),
		  ]);
		  toast()->success('Data Berhasil Ditambahkan!');
		  return back();
	 }

	 public function keldestroy(keluarga $keluarga)
	 {
		  $keluarga->delete();
		  toast()->success('Data Berhasil Dihapus!');
		  return back();
	 }
	 public function update(Request $request, $id)
	 {
		  $up_karyawan = karyawan::where('user_id', Auth::user()->id)
		  ->update([
				'nik'           => $request->input('nik'),
				'no_ktp'        => $request->input('no_ktp'),
				'nama_lengkap'  => $request->input('nama_lengkap'),
				'jk'            => $request->input('jk'),
				'agama'         => $request->input('agama'),
				'tempat_lahir'  => $request->input('tempat_lahir'),
				'tanggal_lahir' => $request->input('tanggal_lahir'),
				'status_nikah'  => $request->input('status_nikah'),
				'no_telepon'    => $request->input('no_telepon'),
				'alamat'        => $request->input('alamat'),
				'visi'          => $request->input('visi'),
				'misi'          => $request->input('misi')
		  ]);
		  toast()->success('Data Berhasil Diupdate!');
		  return back();
	 }
	 public function account(request $request, $id)
	 {
		  $user_data = User::findOrFail($id);
		  if ($request->file('avatar')) {
				$file     = $request->file('avatar');
				$dt       = Carbon::now();
				$acak     = $file->getClientOriginalExtension();
				$fileName = rand(11111, 99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
				$request->file('avatar')->move("images/avatars", $fileName);
				$user_data->avatar   = $fileName;
		  }
		  $user_data->email  = $request->input('email');
		  if ($request->input('password')) {
				$user_data->password = bcrypt(($request->input('password')));
		  }
		  $user_data->update();
		  toast()->success('Data Berhasil Diupdate!');
		  return back();
	 }
}