<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Karyawan;
use App\User;
use Auth;
use DB;
use Session;
use SweetAlert\Facades\Alert;


class forumController extends Controller
{
    public function simpan(Request $request)
	 {
		  pendidikan::create([
				'user_id'       => Auth::user()->id,
				'topic'         => $request->input('topic')
		  ]);

		  toast()->success('Topik Disimpan');
		  return back();
	 }
}