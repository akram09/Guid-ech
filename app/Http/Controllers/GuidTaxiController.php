<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuidTaxi;

class GuidTaxiController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function afficher($wilayas_id){
        $elements = Guidtaxi::where('wilaya_id', strval($wilayas_id))->paginate(6);
        $all = GuidTaxi::where('wilaya_id' , $wilayas_id)->get();

        return view('GuidTaxi', compact('elements', 'all'));

    }


    }



