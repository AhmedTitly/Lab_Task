<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Login;

//use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function index(){
    	return view('registration.index');
    }

    public function store(Request $request){

        $validatedData = $request->validate([

            'facultyemail' => 'required|email|unique:faculties',
            'facultyname' => 'required|string|max:50',
            'facultypass' => 'required',
            'facultyphn'=>'required'
        ]);

       

    	$facul = new Faculty ();

    	$facul->facultyname = $request->facultyname;
        $facul->facultyemail = $request->facultyemail;
        $facul->facultyphn = $request->facultyphn;
        $facul->facultypass = $request->facultypass;
        $facul->facultytype = '5';

        $log = new Login();

        $log->email = $request->facultyemail;
        $log->password = $request->facultypass;
        $log->typeid = '5';

        
    	if ($facul->save()) {
            $log->save();
    		$request->session()->flash('message', 'Successfully Registered. Now you can login');
    		return redirect()->route('login.index');
    	}

    }
}
