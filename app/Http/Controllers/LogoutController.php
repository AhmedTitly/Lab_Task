<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $request){

    	//session clear 
    	//other task
    	$request->session()->flush();
    	return redirect()->route('welcome.index');
    	
    }
}
