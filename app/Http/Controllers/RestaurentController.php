<?php

namespace App\Http\Controllers;
use App\Restaurant;
use Auth;
use App\Category;
use App\Item;
use App\Slider;
use Illuminate\Http\Request;

class RestaurentController extends Controller
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
    public function afficher($wilayas_id){
        $elements = Restaurant::where('wilaya_id', strval($wilayas_id))->paginate(5);
        return view('affichageDisplay' , compact('elements'));
    }

    public function index($wilaya_id , $id)
    {
                       
        $Restaurants = Restaurant::where('wilaya_id' , strval($wilaya_id))
        ->where('id' , strval($id));
        $sliders = Slider::all();
        $categories = Category::all();
        $items = Item::all();
        
        return view('resto',compact('sliders','categories','items','Restaurants'));
    }

    
    public function rateresto(Request $request){

        request()->validate(['rate' => 'required']);

        $Restaurant = Restaurant::find($request->id);

        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = \Auth::id();

        $Restaurant->ratings()->save($rating);
        return back();
    }
}

