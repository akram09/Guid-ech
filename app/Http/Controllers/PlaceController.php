<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    public function afficher($wilaya_id){
      
        $elements = Place::where('wilaya_id' , strval($wilaya_id))->paginate(3);

        return view('GuidLieux' , compact('elements'));

    }
}
