<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Hotel;
use App\Wilaya;
use App\Boutique;
use App\Place;

class wilayaController extends Controller
{

	public function __construct()
    {
     $this->middleware('auth');
    }
    
    public function afficher($id){
    	$elements = Wilaya::where('id', strval($id))->get();

        return view('wilaya1', compact('elements'));

    }

    public function search(REQUEST $request){

        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $wilaya = $uriSegments[1];

        $search = $request -> get('term');

        $elements = Restaurant::whereLike(['name' , 'déscription' , 'adresse'] , '%'.$search.'%' )
                                ->where('wilaya_id' , $wilaya )->paginate(5);

        $hotels = Hotel::whereLike(['name' , 'déscription' ] , '%'.$search.'%')
                      ->where('wilaya_id' , $wilaya)->paginate(5);
                      
        $boutiques = Boutique::whereLike(['name' , 'déscription'] , '%'.$search.'%')
                            ->where('wilaya_id' , $wilaya)->paginate(5);         

        return view('affichageDisplay', compact('elements','hotels','boutiques'));                        
    }
}
