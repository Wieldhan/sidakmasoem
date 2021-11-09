<?php

namespace App\Http\Controllers;

use App\Izin;
use App\User;
use App\Forum;
use App\Cabang;
use App\Jabatan;
use App\Golongan;
use App\Karyawan;
use App\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index(){
		$karyawan = karyawan::all();
		$izin     = izin::all();
		$forum     = forum::all();
		return view('dashboard.index',compact('karyawan','izin','forum'));
	}

	public function contact()
	{
		$data = Karyawan::join('user','karyawan.user_id','=','user.id')
		->join('jabatan','jabatan.id','=','karyawan.jabatan_id')
		->join('golongan','golongan.id','=','karyawan.golongan_id')
		->join('cabang','cabang.id','=','karyawan.cabang_id')
		->orderBy('karyawan.nama_lengkap', 'asc')
		->get();
		return view('dashboard.contact',compact('data'));
	}

	
}