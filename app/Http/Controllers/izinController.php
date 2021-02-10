<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use Auth;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
use App\Cabang;
use App\Izin;
use RealRashid\SweetAlert\Facades\Alert;

class IzinController extends Controller
{
    public function index($id)
    {
        $karyawan = karyawan::where('user_id', $id)->first();
        $golongan = golongan::all();
        $jabatan  = jabatan::all();
        $cabang   = cabang::all();
        $izinall  = izin ::all();
        $izin     = izin::where('karyawan_id', $id)->get();
        return view('dashboard.izin', compact('karyawan', 'golongan', 'jabatan', 'cabang', 'izin','izinall'));
    }

    public function karyawanDetail(request $request)
	{
		$id       = $request->id;
		$jabatan  = Jabatan ::get();
		$golongan = Golongan::get();
		$cabang   = Cabang  ::get();
		$detail   = Karyawan::where('id', $id)->first();
		$id_jab   = $detail->jabatan_id;
		$id_gol   = $detail->golongan_id;
		$id_cab   = $detail->cabang_id;
		$jb       = $detail->jabatan->jabatan;
		$gol      = $detail->golongan->golongan;
		$cab      = $detail->cabang->cabang;
		$data     = Array(
			'id'           => $id,
			'no_induk'     => $detail->nik,
			'no_ktp'       => $detail->no_ktp,
			'nama_lengkap' => $detail->nama_lengkap,
			'jk'           => $detail->jk,
			'id_jabat'     => $id_jab,
			'id_gol'       => $id_gol,
			'id_cab'       => $id_cab,
			'jb'           => $jb,
			'gol'          => $gol,
			'cab'          => $cab,
			'jabatan'      => $jabatan,
			'golongan'     => $golongan,
			'cabang'       => $cabang
		);
		return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal_izin' => 'required',
            'keterangan'   => 'required',
            'perihal'      => 'required'
        ]);

    izin::create([
        'karyawan_id'  => Auth::user()->id,
        'tanggal_izin' => $request->input('tanggal_izin'),
        'keterangan'   => $request->input('keterangan'),
        'perihal'      => $request->input('perihal'),
        'status'       => 'Waiting'
    ]);
    toast()->success('Data Berhasil Ditambahkan!');
    return back();
    }

    public function approve (Request $request, $id){
        $ijin = izin::find($id);
        $ijin->update([
            'status' => 'Approved'
        ]);
    toast()->success('Perizinan Disetujui!');
    return back();
    }
}
