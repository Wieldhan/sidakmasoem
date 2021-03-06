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
use	App\Cuti;
use RealRashid\SweetAlert\Facades\Alert;

class CutiController extends Controller
{
	public function index()
	{
		$karyawan = karyawan::all();
		$golongan = golongan::all();
		$jabatan  = jabatan ::all();
		$cabang   = cabang  ::all();
		$cuti			= cuti    ::all();
		return view('dashboard.cuti', compact('karyawan','golongan','jabatan','cabang','cuti'));
	}

	public function tabelCuti(Request $request)
	{
		$DtKaryawan = Karyawan::all();
		return datatables()->of($DtKaryawan)
		->addColumn('golongan', function($DtKaryawan){
			return $DtKaryawan->golongan->golongan;
		})
		->addColumn('jabatan', function($DtKaryawan){
			return $DtKaryawan->jabatan->jabatan;
		})
		->addColumn('cabang', function($DtKaryawan){
			return $DtKaryawan->cabang->cabang;
		})
		->addColumn('action', function($DtKaryawan){
			return
			"<button type='button' class='btn btn-sm btn-warning detail' data-id='".$DtKaryawan->id."'>Detail</button>
			<button type='button' class='btn btn-sm btn-danger print' karyawan-id='".$DtKaryawan->id."'>Print</button>";
		})
		->toJson();
	}
}
