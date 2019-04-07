<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RestaurentController extends Controller
{
    public function afficher($wilayas_id){
        $elements = DB::table('restaurant')->where('wilaya_id', strval($wilayas_id))->get();

        return view('affichageDisplay' , compact('elements'));
    }

    public function affichertt(){

        $elements = DB::table('restaurant')->get();

        return view('affichageDisplay' , compact('elements'));
    }
}
