<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Golongan;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class GolonganController extends Controller
{
	public function index()
	{
		if(Auth::user()->level == 'user') {
			Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
			return redirect()->to('/');
		}
		$data_golongan = golongan::all();
		return view('golongan.index',['data_golongan'=> $data_golongan]);
	}

	public function simpan(Request $request)
	{
		golongan::create($request->all());
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return redirect('/golongan');
	}

	public function delete(golongan $golongan)
	{
		$golongan->delete();
		alert()->success('SUCCES.','DATA BERHASIL DIHAPUS!');
		return redirect('/golongan');
	}

	public function update(Request $request, golongan $golongan)
	{
		$golongan->update($request->all());
		alert()->success('SUCCES.','DATA BERHASIL UPDATE!');
		return redirect('/golongan');
	}
}
