<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Hotel;
use App\Wilaya;
use App\Boutique;
use App\Place;

class wilayaController extends Controller
{

	public function __construct()
    {
     $this->middleware('auth');
    }
    
    public function afficher(){

        return view('test2');

    }
    
}
