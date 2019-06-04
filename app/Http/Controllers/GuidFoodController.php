<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuidFood;

class GuidFoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function afficher($wilayas_id){
    	$elements = GuidFood::where('wilaya_id', strval($wilayas_id))->paginate(5);

        return view('GuidFood', compact('elements'));

    }
    
}
