<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Auth;
use App\Golongan;
use App\Exports\GolonganExport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class GolonganController extends Controller
{
	public function index()
	{
		if (Auth::user()->level == 'user') {
			Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
			return redirect()->to('/');
		}
		$data_golongan = golongan::all();
		return view('golongan.index', ['data_golongan' => $data_golongan]);
	}

	public function export()
	{
		return Excel::download(new GolonganExport, 'datagolongan.xlsx');
	}

	public function simpan(Request $request)
	{
		golongan::create($request->all());
		toast()->success('Data Berhasil Ditambahkan!');
		return redirect('/golongan');
	}

	public function delete(golongan $golongan)
	{
		$golongan->delete();
		toast()->success('Data Berhasil Dihapus!');
		return redirect('/golongan');
	}

	public function update(Request $request, golongan $golongan)
	{
		$golongan->update($request->all());
		toast()->success('Data Berhasil Diupdate!');
		return redirect('/golongan');
	}
}
