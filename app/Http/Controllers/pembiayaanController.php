<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembiayaan;
use Auth;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PembiayaanController extends Controller
{
    public function index()
	{
		if(Auth::user()->level == 'user') {
			Alert::error('Oopss..', 'Anda dilarang masuk ke area ini..!!!');
			return redirect()->to('/dashboard');
		}
		$pembiayaan = pembiayaan::all();
		return view('pembiayaan.index',Compact('pembiayaan'));
	}

    public function pembiayaanview()
	{
		$dataBiaya = pembiayaan::all();
		return view('pembiayaan.view',Compact('dataBiaya'));
	}

	public function simpan(Request $request)
    {
	$this->validate($request, [
		'lemari'            => 'required',
		'laci'              => 'required',
		'no_berkas'         => 'required',
		'no_akad'           => 'required',
		'cif'               => 'required',
		'no_ktp'            => 'required',
		'nama_nasabah'      => 'required',
		'nama_ao'           => 'required',
		'tanggal_pencairan' => 'required'
		]);
		Pembiayaan::create([
		'lemari'            => $request->input('lemari'),
		'laci'              => $request->input('laci'),
		'no_berkas'         => $request->input('no_berkas'),
		'no_akad'           => $request->input('no_akad'),
		'cif'               => $request->input('cif'),
		'no_ktp'            => $request->input('no_ktp'),
		'nama_nasabah'      => $request->input('nama_nasabah'),
		'nama_ao'           => $request->input('nama_ao'),
		'tanggal_pencairan' => $request->input('tanggal_pencairan'),
		'status'            => 'Arsip'
		]);
		
		toast()->success('Data Berhasil Ditambahkan!');
		return back();
    }

    public function dipinjam(Request $request, $id){
        $data = Pembiayaan::find($id);
        $data->update([
            'status' => 'Dipinjam'
        ]);
    toast()->success('Peminjaman Arsip Disetujui!');
    return back();
		}
		
	public function arsip(Request $request, $id){
			$data = Pembiayaan::find($id);
			$data->update([
					'status' => 'Arsip'
			]);
	toast()->success('Arsip Tersimpan!');
	return back();
	}

	public function wo(Request $request, $id){
		$data = Pembiayaan::find($id);
		$data->update([
				'status' => 'WO'
		]);
	toast()->success('Arsip WO Tersimpan!');
	return back();
}
public function hapus($id)
	{
		Pembiayaan::findOrFail($id)->delete();
		toast()->success('Data Berhasil Dihapus!');
		return redirect('/pembiayaan');
	}
}
