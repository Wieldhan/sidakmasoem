<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
	public function login()
	{
		return view('auths.login');
	}

	public function postlogin(request $request)
	{
		
	}
}
