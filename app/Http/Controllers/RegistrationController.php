<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;

//use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function index(){
    	return view('registration.index');
    }

    public function store(Request $request){

        $validatedData = $request->validate([

            'name' => 'required|string|max:50',
            'phone'=>'required',
            'username' => 'required|string|max:40',
            'password' => 'required'
            // 'type' => 'required'
            

        ]);

       
        $user = new user();

        $user->name = $request->name;
        // $user->comName = $request->comName;
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = 'user';

        
    	if ($user->save()) {
            
    		$request->session()->flash('message', 'Successfully Registered. Now you can login');
    		return redirect()->route('login.index');
    	}

    }
}
