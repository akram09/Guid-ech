<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RestaurentController extends Controller
{
    public function afficher($wilayas_id){
        $elements = DB::table('restaurants')->where('wilaya_id', strval($wilayas_id))->paginate(5);

        return view('affichageDisplay' , compact('elements'));
    }

    public function affichertt(){

        $elements = DB::table('restaurants')->get();

        return view('affichageDisplay' , compact('elements'));
    }
}
