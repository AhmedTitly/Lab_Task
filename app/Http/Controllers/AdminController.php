<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Illuminate\Support\Facades\DB;
//use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
	 public function index(){
    	return view('admin.index');
    }


    public function userList()
    {
    	$user = DB::table('users')->get();
    	return view('admin.userList')->with('users', $user);
    }

    public function create(){

    	return view('admin.create');
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
        
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = 'scout';

        
    	if ($user->save()) {
            
    		$request->session()->flash('message', 'Successfully Registered a new Employee.');
    		return redirect()->route('admin.index');
    	}
    }

    public function profile(Request $request){

        $user = DB::table('users')
                    ->where('id', $request->session()->get('id'))
                    ->first();
        return view('admin.profile')->with('user', $user);
    }
     public function updateProfile(Request $request){

        $validatedData = $request->validate([
            'username' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'password' => 'required',
            'phone'=>'required'
        ]);
        
        
        $user = User::find($request->session()->get('id'));

        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->password = $request->password;

        $user->save();
        return redirect()->route('admin.profile')->with('success', 'Profile Updated Successfully');     
    }

  
    

public function edit($emp_id){

    	$user = User::find($emp_id);
    	return view('admin.edit')->with('user', $user);
    }

    public function update(Request $request){


    	$user = User::find($request->id);

		$user->name = $request->name;
        //$user->comName = $request->comName;
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = 'scout';

    	$user->save();
    	return redirect()->route('admin.userList');    	
    }

    public function delete($emp_id){

    	$user = User::find($emp_id);
    	return view('admin.delete')->with('user', $user);
    }

    public function destroy(Request $request){
    	User::destroy($request->id);
    	return redirect()->route('admin.userList');
    }


    
}
