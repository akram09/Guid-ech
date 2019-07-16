<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Boutique;
use App\Hotel;
use App\Classe;
use App\GuidTaxi;
use App\GuidFood;
use App\Place;

class SearchController extends Controller
{

    /*
    *
    Moncef reggam 
    *
    */

    public function searchresto(REQUEST $request){


        /*  wherelike() : macro function or custom builderer check boot() in 
         *  "app/Providers/AppServiceProvider.php" file 
         */
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $wilaya = $uriSegments[1];

        $search = $request -> get('term');

        $elements = Restaurant::whereLike(['name' , 'déscription' , 'adresse'] , '%'.$search.'%' )
                                ->where('wilaya_id' , $wilaya )->paginate(5);
                                $all = Restaurant::where('wilaya_id' , $wilaya)->get();
                                
        return view('affichageDisplay' , compact('elements' , 'all'));

    }

    public function searchbout(REQUEST $request){
        /*  wherelike() : macro function or custom builder check boot() in 
         *  "app/Providers/AppServiceProvider.php" file 
         */

        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $wilaya = $uriSegments[1];

        $search = $request -> get('term');

        $elements = Boutique::whereLike(['name' , 'déscription' , 'adresse'] , '%'.$search.'%' )
                                ->where('wilaya_id' , $wilaya )->paginate(3);

                                $all = Boutique::where('wilaya_id' , $wilaya)->get();
                                
        return view('afBoutique' , compact('elements' , 'all'));

    }

    public function searchhot(REQUEST $request){
        /*  wherelike() : macro function or custom builder check boot() in 
         *  "app/Providers/AppServiceProvider.php" file 
         */

        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $wilaya = $uriSegments[1];

        $search = $request -> get('term');

        $elements = Hotel::whereLike(['name' , 'déscription' , 'adresse' ] , '%'.$search.'%' )
                                ->where('wilaya_id' , $wilaya )->paginate(3);

                                $all = Hotel::where('wilaya_id' , $wilaya)->get();
                                
        return view('afHotel' , compact('elements' , 'all'));

    }


    public function searchfood(REQUEST $request){
        /*  wherelike() : macro function or custom builder check boot() in 
         *  "app/Providers/AppServiceProvider.php" file 
         */

        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $wilaya = $uriSegments[1];

        $search = $request -> get('term');

        $elements = GuidFood::where('name' , 'Like' , '%'.$search.'%' )
                                ->where('wilaya_id' , $wilaya )->paginate(3);

                                $all = GuidFood::where('wilaya_id' , $wilaya)->get();
                                
        return view('GuidFood' , compact('elements' ,'all'));

    }


    public function searchtaxi(REQUEST $request){
        /*  wherelike() : macro function or custom builder check boot() in 
         *  "app/Providers/AppServiceProvider.php" file 
         */

        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $wilaya = $uriSegments[1];

        $search = $request -> get('term');

        $elements = GuidTaxi::where('name' , 'Like' , '%'.$search.'%' )
                                ->where('wilaya_id' , $wilaya )->paginate(3);

                                $all = GuidTaxi::where('wilaya_id' , $wilaya)->get();
                                
        return view('GuidTaxi' , compact('elements', 'all'));

    }

    public function searchplace(REQUEST $request){
        /*  wherelike() : macro function or custom builder check boot() in 
         *  "app/Providers/AppServiceProvider.php" file 
         */

        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $wilaya = $uriSegments[1];

        $search = $request -> get('term');

        $elements = Place::where('name' , 'Like' , '%'.$search.'%' )
                                ->where('wilaya_id' , $wilaya )->paginate(3);

                                $all = Place::where('wilaya_id' , $wilaya)->get();
                                
        return view('GuidLieux' , compact('elements' , 'all'));

    }
    
}
