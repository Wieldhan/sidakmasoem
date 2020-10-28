<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkController extends Controller
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
		toast()->success('Data Berhasil Ditambahkan!');
		return redirect('/jabatan');
	}

	public function delete(jabatan $jabatan)
	{
		$jabatan->delete();
		toast()->success('Data Berhasil Dihapus!');
		return redirect('/jabatan');
	}

	public function update(Request $request, jabatan $jabatan)
	{
		$jabatan->update($request->all());
		toast()->success('Data Berhasil Diupdate!');
		return redirect('/jabatan');
	}
}
