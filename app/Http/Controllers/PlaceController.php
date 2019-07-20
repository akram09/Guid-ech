<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Image;

class PlaceController extends Controller
{
    public function afficher($wilaya_id){
      
        $elements = Place::where('wilaya_id' , strval($wilaya_id))->paginate(3);
        $all = Place::where('wilaya_id' , $wilaya_id)->get();

        return view('GuidLieux' , compact('elements' , 'all'));

    }
}
