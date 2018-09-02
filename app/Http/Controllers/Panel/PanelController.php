<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class \PanelController extends Controller
{
    
    public function __construct(){
    	//Ex:
    	// $this->middleware('auth');
    	// Ex: quais metodos
    	// $this->middleware('auth')->only(['method1', 'method2']);
    	// Ex: não use auth nos metodos
    	// $this->middleware('auth')->except(['index']);
    }

}
