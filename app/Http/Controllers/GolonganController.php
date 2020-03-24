<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Golongan;
use RealRashid\SweetAlert\Facades\Alert;

class GolonganController extends Controller
{
	public function index()
	{
		$data_golongan = golongan::all();
		return view('golongan.index',['data_golongan'=> $data_golongan]);
	}

	public function simpan(Request $request)
	{
		golongan::create($request->all());
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return redirect('/golongan');
	}

	public function delete($id)
	{
		$golongan = golongan::find($id);
		$golongan->delete();
		alert()->success('SUCCES.','DATA BERHASIL DIHAPUS!');
		return redirect('/golongan');
	}
}
