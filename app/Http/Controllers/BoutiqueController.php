<?php

namespace App\Http\Controllers;
use DB;
use App\Boutique;
use App\Http\Requests\BoutiqueRequest;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
public function affichertt(){
    $elements = DB::table('boutiques')->get();
    return view('afBoutique' , compact('elements'));
}
public function afficher($wilayas_id){
    
    $elements = DB::table('boutiques')->where('wilaya_id', strval($wilayas_id))->get();
    return view('afBoutique' , compact('elements'));
    
}
   
}
