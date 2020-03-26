<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Jabatan;
use RealRashid\SweetAlert\Facades\Alert;

class JabatanController extends Controller
{
    public function index()
	{
		$data_jabatan = jabatan::all();
		return view('jabatan.index',['data_jabatan'=> $data_jabatan]);
	}

	public function simpan(Request $request)
	{
		jabatan::create($request->all());
		alert()->success('SUCCES.','DATA BERHASIL DITAMBAHKAN!');
		return redirect('/jabatan');
	}

	public function delete($id)
	{
		$jabatan = jabatan::find($id);
		$jabatan->delete();
		alert()->success('SUCCES.','DATA BERHASIL DIHAPUS!');
		return redirect('/jabatan');
	}

	public function update(Request $request, $id)
	{
		$jabatan = jabatan::find($id);
		$jabatan->update($request->all());
		alert()->success('SUCCES.','DATA BERHASIL UPDATE!');
		return redirect('/jabatan');
	}
}
