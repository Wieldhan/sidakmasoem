<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\User;
use App\Forum;
use App\Karyawan;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class forumController extends Controller
{
	public function simpan(Request $request)
	{
		 forum::create([
			  'user_id'       => Auth::user()->id,
			  'nama_lengkap'  => Auth::user()->nama_lengkap,
			  'topic'         => $request->input('topic')
		 ]);
		 toast()->success('Topik Disimpan');
		return back();
	}
}