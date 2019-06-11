<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Contact;
use App\Item;
use App\Reservation;
use App\Slider;
use Auth;
use App\restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ConsoleTVs\Charts\Charts;
use DB;

class DashboardController extends Controller
{
	/** 
     * 
     *@return \Illuminate\Http\Response : this function allow to display all elements count in dashboard
     *@author  Abdelwahed Madani Yousfi 
                                          Updated by Moncef reggam
     */
    public function index()
    {
        

        $categoryCount = Category::count();
        
        
        



        $itemCount = Item::where('user_id' , Auth::user()->id)->count();
        
        $sliderCount = Slider::where('user_id' , Auth::user()->id)->count();
        //$restaurant : to retrieve all restaurant's ids owned by admin to filter shown data 
        $restaurant = Restaurant::where('user_id' , Auth::user()->id)->pluck('id');

        $categoryCount = Category::where('user_id' , Auth::user()->id)->count();

        $reservations = Reservation::where('status',false)->whereIn('restaurant_id' , $restaurant)->get();


        $contactCount = Contact::whereIn('restaurant_id' , $restaurant)->count();
        return view('admin.dashboard',compact('categoryCount','itemCount','sliderCount','reservations','contactCount'));

    }
}
