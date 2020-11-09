<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\User;
use App\Jabatan;
use App\Golongan;
use App\Cabang;
use App\Izin;

class DashboardController extends Controller
{
	public function index(){
		$karyawan = karyawan::all();
		$izin     = izin::all();
		return view('dashboard.index',compact('karyawan','izin'));
	}

	public function contact()
	{
		$data = Karyawan::join('user','karyawan.user_id','=','user.id')
		->join('jabatan','jabatan.id','=','karyawan.jabatan_id')
		->join('golongan','golongan.id','=','karyawan.golongan_id')
		->join('cabang','cabang.id','=','karyawan.cabang_id')
		->get();
		// dd($data);
		return view('dashboard.contact',compact('data'));
	}
}
