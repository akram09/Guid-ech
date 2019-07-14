<?php

namespace App\Http\Controllers;
use App\Restaurant;
use Auth;
use App\Category;
use App\Item;
use App\Slider;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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
     * @author Moncef Reggam
     */
    public function afficher($wilayas_id){
        $elements = Restaurant::where('wilaya_id', strval($wilayas_id))->paginate(3);
        return view('affichageDisplay' , compact('elements'));
    }


    /**
    * @author Madani Yousfi Abdelwahed 
                                       Updated by Moncef Reggam
    *
    * @return \Illuminate\Http\Response
    */
    public function index($wilaya_id , $id)
    {
                       
        $Restaurants = Restaurant::where('wilaya_id' , strval($wilaya_id))
        ->where('id' , strval($id));
        $sliders = Slider::where('restaurant_id' , $id )->get();
        $categories = Category::where('restaurant_id' , $id )->get();
        $items = Item::where('restaurant_id' , $id )->get();
        
        return view('resto',compact('sliders','categories','items','Restaurants'));
    }

    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    
    public function rate(Request $request){

        request()->validate(['rate' => 'required']);

        $Restaurant = Restaurant::find($request->id);

        $rating = $Restaurant->ratings()->where('user_id' , Auth::user()->id)->first();

        if(is_null($rating)){

        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = \Auth::id();
        $Restaurant->ratings()->save($rating);
        return redirect()->back(); }
        else {

        $rating->rating = $request->rate;
        $Restaurant->ratings()->save($rating);
        return redirect()->back();
        }
    }
}

