<?php

namespace Ekasit\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index() {
		return view('dashboard');
	}

	public function profile() {
		return view('profile');	 
	}
}
