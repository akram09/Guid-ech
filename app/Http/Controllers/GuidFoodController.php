<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GuidFoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function afficher($wilayas_id){
    	$elements = DB::table('GuidFoods')->where('wilaya_id', strval($wilayas_id))->paginate(5);

        return view('GuidFood', compact('elements'));

    }
     public function affichertt(){

        $elements = DB::table('GuidFoods')->get();

        return view('GuidFood' , compact('elements'));
    }
}
