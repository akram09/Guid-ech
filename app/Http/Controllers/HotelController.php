<?php

namespace App\Http\Controllers;
use DB;
use App\Hotel;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        return view('formulaires.registerHotels');
    }

    public function store(HotelRequest $request) {
        
        

        $hotel = new Hotel();

        $hotel->name = $request->input('name');
        $hotel->description = $request->input('description');
        $hotel->email = $request->input('email');
        $hotel->password = $request->input('password');
        $hotel->étoiles = $request->input('étoiles');
        $hotel->willaya = $request->input('willaya');

        $hotel->save();

        session()->flash('success','Hotel request sent successfully. we will confirm to you shortly');

        return redirect('/');
    }

    public function affichertt(){
        $elements = DB::table('hotels')->get();

        return view('affichageDisplay' , compact('elements'));
    }

    public function afficher($wilayas_id){
        $elements = DB::table('hotels')->where('wilaya_id', strval($wilayas_id))->get();

        return view('affichageDisplay' , compact('elements'));
    }

  
}
