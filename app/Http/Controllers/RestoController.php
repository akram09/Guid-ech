<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Category;
use App\Item;
use App\Slider;
use App\Restaurant;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $items = Item::all();
        $names = Restaurant::where('owner_id', Auth::User()->id)->get();
        // reservations : Pour les réservations actives
        $reservations = DB::table('reservations')->where('own_id', Auth::User()->id)
        ->where('status', '1')->get();
        return view('resto',compact('sliders','categories','items','names','reservations'));
    }
}
