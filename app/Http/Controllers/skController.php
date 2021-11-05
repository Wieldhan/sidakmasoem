<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Sk;
use Session;
use Storage;
use App\User;
use App\Karyawan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SweetAlert\Facades\Alert;

class SkController extends Controller
{
    public function index()
	{
		$data_sk   = sk::all();
		$data_user = user::all();
		return view('dashboard.sk', compact('data_sk', 'data_user'));
	}

	public function view()
	{
		$data_sk   = sk::all();
		$data_user = user::all();
		return view('dashboard.skview', compact('data_sk', 'data_user'));
	}

	public function simpan(Request $request)
	{
		$this->validate($request, [
			'no_sk' => 'required|unique: sk,no_sk',
			'judul' => 'required',
			'file'  => 'required|mimes : pdf,doc,docm,docx,zip'
		]);
		if($request->file('file')) {
			$file     = $request->file('file');
			$dt       = Carbon::now();
			$acak     = $file->getClientOriginalExtension();
			$fileName = $request->get('judul').'.'.$acak; 
			$request->file('file')->move("images/sk", $fileName);
			$file  	  = $fileName;
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

	public function hapus($id)
	{
		$dl       = sk::find($id);
		$filename = $dl->file;
		unlink(public_path('/images/sk/'.$filename));
		$dl->delete();
		toast()->success('Data Berhasil Dihapus!');
		return back();
	}

	public function downloadsk($id)
	{
		$dl   = sk::find($id);
		return  response()->download(public_path('/images/sk/'.$dl->file));
	}
}