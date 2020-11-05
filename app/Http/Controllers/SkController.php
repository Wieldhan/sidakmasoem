<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Sk;
use App\Karyawan;
use Carbon\Carbon;
use Auth;
use DB;
use Session;
use SweetAlert\Facades\Alert;

class SkController extends Controller
{
    public function index()
	{
		$data_sk   = sk::all();
		$data_user = user::all();
		return view('dashboard.sk', compact('data_sk', 'data_user'));
	}

	public function detailsk(request $request)
	{
		$id         = $request->id;
		$detail     = sk::where('id', $id)->first();
		$id_user    = $detail->user_id;
		$no         = $detail->no_sk;
		$judul      = $detail->judul;
		$keterangan = $detail->keterangan;
		$gambar     = $detail->gambar;
		$user  		= user::get();
		$data       = Array(
			'id'         => $id,
			'id_user'    => $id_user,
			'no'         => $no,
			'judul'      => $judul,
			'keterangan' => $keterangan,
			'gambar'     => $gambar
		);
		return response()->json($data);
	}

	public function datask(Request $request)
	{
		$DtSK = sk::all();
		return datatables()->of($DtSK)
		->addColumn('inputer', function($DtSK){
			return $DtSK->user->nama_lengkap;
		})
			->addColumn('action', function($DtSK){
			return
			"
			<button type='button' class='btn btn-sm btn-success download' download-id='".$DtSK->id."'>Download</button>
			<button type='button' class='btn btn-sm btn-danger hapus' sk-id='".$DtSK->id."'>Delete</button>";
		})
		->toJson();
	}

	public function simpan(Request $request)
	{
		$this->validate($request, [
			'no_sk' => 'required|unique:sk,no_sk',
			'judul' => 'required'
		]);
		if($request->file('file')) {
			$file     = $request->file('file');
			$dt       = Carbon::now();
			$acak     = $file->getClientOriginalExtension();
			$fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
			$request->file('file')->move("images/sk", $fileName);
			$file   = $fileName;
		} else {
			$file = NULL;
		}
		sk::create([
			'user_id'	  => Auth::user()->id,
			'no_sk'       => $request->get('no_sk'),
			'judul'       => $request->get('judul'),
			'keterangan'  => $request->get('keterangan'),
			'tanggal_sah' => $request->get('tanggal_sah'),
			'file'        => $file
		]);
		toast()->success('Data Berhasil Ditambahkan!');
		return back();
	}

	public function hapus(sk $sk)
	{
		$sk->delete();
		toast()->success('Data Berhasil Dihapus!');
		return back();
	}
}
