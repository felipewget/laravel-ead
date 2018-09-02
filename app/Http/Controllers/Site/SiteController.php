<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{

	public function index(){
		return view('site/home');
	}

	public function login(){
		return view('site/login');
	}

}
