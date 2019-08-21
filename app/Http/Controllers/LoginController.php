<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Login;
use App\Faculty;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(Request $request){

        return view('login.index');

     //     $user = DB::table('logins')
     //                ->where('email', '')
     //                ->where('password', '')
     //                ->first();

    	// if($user == null){
    	// 	return view('login.index');
    	// }else{
    	// 	//echo $request->name;
    	// 	return view('login.index')->with('email', $request->email);
    	// }
    
    }

    public function verify(Request $request){
    	
    	$email = $request->email;
    	//$password = $request->input('password');

        $user = DB::table('logins')
                    ->where('email', $email)
                    ->first();

        if ($user != null) {

            $password = $request->password;

            if ($user->password == $password) {

                $facul = DB::table('faculties')
                        ->where('facultyemail', $email)
                        ->first();
                $fid = $facul->facultyId;
                $request->session()->put('faculid', $fid);
                // print_r($request->session()->get('faculid'));
                //error_log($request->session()->get('faculid'));
                if ($user->typeid == '5') {
                    //echo "logged as admin";
                    return redirect()->route('faculty.index');
                }
                else{
                    echo "logged as user";
                    return redirect()->route('employer.index');
                }
            }
            else{
                $request->session()->flash('message', 'Invalid password');
                return redirect()->route('login.index', ['email'=>$email]);
            }
        }
        else{
			
			$request->session()->flash('message', 'Invalid email');

			//$request->session()->flash('uname', $uname);

			return redirect()->route('login.index', ['email'=>$email]);
		}
    	
    }
}
