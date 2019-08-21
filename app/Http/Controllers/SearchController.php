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

			$users=DB::table('faculties')->where('facultyname','LIKE','%'.$request->search."%")->get();

			if($users){

				foreach ($users as $key => $u) {
					$output.='<tr>'.

					'<td>'.$u->facultyname.'</td>'.
					'<td>'.$u->facultyemail.'</td>'.
					'<td>'.$u->facultyphn.'</td>'.
					'</tr>';
				}
				return Response($output);
			}
		}
	}
}