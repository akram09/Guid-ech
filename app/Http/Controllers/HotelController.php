<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }
public function affichertt(){
    $elements = DB::table('hotels')->get();
    return view('afHotel' , compact('elements'));
}
public function afficher($wilayas_id){
    
$elements = DB::table('hotels')->where('wilaya_id', strval($wilayas_id))->get();
    return view('afHotel' , compact('elements'));
    
}
   
}

