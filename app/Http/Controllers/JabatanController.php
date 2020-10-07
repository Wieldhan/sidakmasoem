<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Jabatan;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JabatanController extends Controller
{
    public function index()
	{
		if(Auth::user()->level == 'user') {
			Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
			return redirect()->to('/');
		}
		$data_jabatan = jabatan::all();
		return view('jabatan.index',['data_jabatan'=> $data_jabatan]);
	}

	public function simpan(Request $request)
	{
		jabatan::create($request->all());
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return redirect('/jabatan');
	}

	public function delete(jabatan $jabatan)
	{
		$jabatan->delete();
		alert()->success('SUCCES.','DATA BERHASIL DIHAPUS!');
		return redirect('/jabatan');
	}

	public function update(Request $request, jabatan $jabatan)
	{
		$jabatan->update($request->all());
		alert()->success('SUCCES.','DATA BERHASIL UPDATE!');
		return redirect('/jabatan');
	}
}
