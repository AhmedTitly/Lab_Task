<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(Request $request){

        return view('login.index');
    
    }

    public function verify(Request $request){
    	
    	$username = $request->username;
    	//$password = $request->input('password');

        $user = DB::table('users')
                    ->where('username', $username)
                    ->first();

        if ($user != null) {

            $password = $request->password;

            if ($user->password == $password) {
                $id = $user->id;
                 $request->session()->put('id', $id);

                 if ($user->type == 'admin') {
                    //echo "logged as admin";
                    
                    return redirect()->route('admin.index');
                }
                elseif($user->type == 'scout'){
                    return redirect()->route('employer.index');
                }
                 else{
                    echo "logged as user";
                    return redirect()->route('user.index');
                }
            }
            else{
                $request->session()->flash('message', 'Invalid password');
                return redirect()->route('login.index', ['username'=>$username]);
            }
        }
        else{
			
			$request->session()->flash('message', 'Invalid Username');

			return redirect()->route('login.index', ['username'=>$username]);
		}
    	
    }
}
