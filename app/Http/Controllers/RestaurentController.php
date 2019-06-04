<?php

namespace App\Http\Controllers;
use App\Restaurant;

use Illuminate\Http\Request;
use DB;

class RestaurentController extends Controller
{
    public function afficher($wilayas_id){
        $elements = Restaurant::where('wilaya_id', strval($wilayas_id))->paginate(5);
        return view('affichageDisplay' , compact('elements'));
    }

    
}
