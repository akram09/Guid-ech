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
        
        
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $last = $uriSegments[3];
        $sliders = Slider::all();
        $categories = Category::all();
        $items = Item::all();
        
        return view('resto',compact('sliders','categories','items'));
    }
}
