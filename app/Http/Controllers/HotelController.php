<?php

namespace App\Http\Controllers;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function afficher($wilaya_id , $id){
        $elements = Hotel::where('wilaya_id', strval($wilayas_id))
                     ->where('id', strval($id))->get();
        return view('afHotel' , compact('elements'));
    }
    public function affichertt($wilayas_id){
    
        $elements = Hotel::where('wilaya_id', strval($wilayas_id))->paginate(3);
        return view('afHotel' , compact('elements'));
    
    }

     public function rate(Request $request){

        request()->validate(['rate' => 'required']);

        $Hotel = Hotel::find($request->id);

        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = \Auth::id();

        $Hotel->ratings()->save($rating);
        return back();
    }
   
}

