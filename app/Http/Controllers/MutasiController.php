<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Validator;
use Auth;
use App\Karyawan;
use App\Golongan;
use App\Jabatan;
use App\User;
use App\Cabang;
use App\Mutasi;
use RealRashid\SweetAlert\Facades\Alert;

class MutasiController extends Controller
{
	public function index()
	{
		$karyawan = karyawan::all();
		$golongan = golongan::all();
		$jabatan = jabatan::all();
		$cabang = cabang::all();
		return view('dashboard.mutasi', compact('karyawan','golongan','jabatan','cabang'));
	}

	public function tabelkaryawan(request $request)
	{
		$TbKaryawan = Karyawan::all();
		return datatables()->of($TbKaryawan)
		->addColumn('golongan', function($TbKaryawan){
			return $TbKaryawan->golongan->golongan;
		})
		->addColumn('jabatan', function($TbKaryawan){
			return $TbKaryawan->jabatan->jabatan;
		})
		->addColumn('cabang', function($TbKaryawan){
			return $TbKaryawan->cabang->cabang;
		})
		->addColumn('action', function($TbKaryawan){
			return
			"<button type='button' class='btn btn-sm btn-warning pilih' data-id='".$TbKaryawan->id."'>Pilih</button>";
		})
		->toJson();
	}

	public function tabelmutasi(Request $request)
	{
		$TbMutasi = Mutasi::all();
		return datatables()->of($TbMutasi)
		->addColumn('jabatan', function($TbMutasi){
			return $TbMutasi->jabatan->jabatan;
		})
		->addColumn('nik', function($TbMutasi){
			return $TbMutasi->karyawan->nik;
		})
		->addColumn('nama_lengkap', function($TbMutasi){
			return $TbMutasi->karyawan->nama_lengkap;
		})
		->addColumn('golongan', function($TbMutasi){
			return $TbMutasi->golongan->golongan;
		})
		->addColumn('cabang', function($TbMutasi){
			return $TbMutasi->cabang->cabang;
		})
		->addColumn('action', function($TbMutasi){
			return
			"<button type='button' class='btn btn-sm btn-danger print' karyawan-id='".$TbMutasi->id."'>Print</button>";
		})
		->toJson();
	}

	public function karyawandetail(request $request)
	{
		$id       = $request->id;
		$detail   = Karyawan::where('id', $id)->first();
		$id_jab   = $detail->jabatan_id;
		$id_gol   = $detail->golongan_id;
		$id_cab   = $detail->cabang_id;
		$id_kar		=	$detail->id;
		$jb       = $detail->jabatan->jabatan;
		$gol      = $detail->golongan->golongan;
		$cab      = $detail->cabang->cabang;
		$jabatan  = Jabatan::get();
		$golongan = Golongan::get();
		$cabang   = Cabang::get();
		$data     = Array(
			'id'           => $id,
			'no_induk'     => $detail->nik,
			'no_ktp'       => $detail->no_ktp,
			'nama_lengkap' => $detail->nama_lengkap,
			'jk'           => $detail->jk,
			'id_jabat'     => $id_jab,
			'id_gol'       => $id_gol,
			'id_cab'       => $id_cab,
			'id_kar'			 => $id_kar,
			'jb'           => $jb,
			'gol'          => $gol,
			'cab'          => $cab,
			'jabatan'      => $jabatan,
			'golongan'     => $golongan,
			'cabang'       => $cabang
		);
		return response()->json($data);
	}

	public function store(request $request, $id)
	{
		
		$mutasi = mutasi::create([
			'karyawan_id'    => $request->id,
			'jabatan_id'     => $request->input('jabatan_id'),
			'golongan_id'    => $request->input('golongan_id'),
			'cabang_id'      => $request->input('cabang_id'),
			'tanggal_mutasi' => $request->input('tanggal_mutasi'),
			'keterangan'     => $request->input('keterangan'),
			'status'         => $request->input('status')
		]);

		$mutasi->karyawan->where('id', $mutasi->karyawan_id)
		->update([
			'jabatan_id'  => $request->input('jabatan_id'),
			'golongan_id' => $request->input('golongan_id'),
			'cabang_id'   => $request->input('cabang_id')
		]);
		toast()->success('Data Berhasil Ditambahkan!');
		return redirect('/mutasi');
	}
}
