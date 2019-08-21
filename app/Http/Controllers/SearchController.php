<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller

{

   public function index(){

		return view('search.search');
	}

	public function search(Request $request){

		if($request->ajax()){

			$output="";

			$users=DB::table('users')->where('name','LIKE','%'.$request->search."%")->get();

			if($users){

				foreach ($users as $key => $u) {
					$output.='<tr>'.

					'<td>'.$u->name.'</td>'.
					'<td>'.$u->phone.'</td>'.
					'<td>'.$u->type.'</td>'.
					'</tr>';
				}
				return Response($output);
			}
		}
	}
}