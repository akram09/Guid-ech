<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class wilayaController extends Controller
{

	public function __construct()
    {
     $this->middleware('auth');
    }
    
    public function afficher($id){
    	$elements = DB::table('wilayas')->where('id', strval($id))->paginate(5);

        return view('wilaya1', compact('elements'));

    }
}
