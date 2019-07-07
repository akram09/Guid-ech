<?php

namespace App\Http\Controllers;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;
use App\Hotel;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class HotelController extends Controller
{
    /********
     * 
     * Moncef Reggam
     * 
     * *******/
   
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
        
        $rating = $Hotel->ratings()->where('user_id' , Auth::user()->id)->first();

        if(is_null($rating)){
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = \Auth::id();
        $Hotel->ratings()->save($rating);
        return redirect()->back();
        }
        else {

            $rating->rating = $request->rate;
            $Hotel->ratings()->save($rating);
            return redirect()->back();
            }
    }
   
}

