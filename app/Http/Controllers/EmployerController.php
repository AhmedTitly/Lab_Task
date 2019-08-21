<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Illuminate\Support\Facades\DB;

class EmployerController extends Controller
{
     public function index(){
    	return view('employer.index');
    }

    public function userList()
    {
    	$user = DB::table('users')->get();
    	return view('employer.userList')->with('users', $user);
    }

    public function createPlace(){

    	return view('employer.create');
    }

    public function storePlace(Request $request){

            $validatedData = $request->validate([

            'location' => 'required',
            'cost'=>'required',
            'medium' => 'required',
            'writing' => 'required',
             'username' => 'required'
            

        ]);

       

        $user = new blog();

        $blog->location = $request->location;
        $blog->cost = $request->cost;
        $blog->medium = $request->medium;
        $blog->writing = $request->writing;
        $blog->username = 'ahmed';
     

        
    	if ($blog->save()) {
            
    		$request->session()->flash('message', 'Successfully added a new place.');
    		return redirect()->route('employer.index');
    	}
    }

    public function profile(Request $request){

        $user = DB::table('users')
                    ->where('id', $request->session()->get('id'))
                    ->first();
        return view('employer.profile')->with('user', $user);
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
        return redirect()->route('employer.profile')->with('success', 'Profile Updated Successfully');     
    }

  
    

public function edit($emp_id){

    	$user = User::find($emp_id);
    	return view('employer.edit')->with('user', $user);
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
    	return redirect()->route('employer.userList');    	
    }

    public function delete($emp_id){

    	$user = User::find($emp_id);
    	return view('employer.delete')->with('user', $user);
    }

    public function destroy(Request $request){
    	User::destroy($request->id);
    	return redirect()->route('admin.userList');
    }

}
