<?php

namespace App\Http\Controllers;
use App\Boutique;
use App\Http\Requests\BoutiqueRequest;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class BoutiqueController extends Controller
{
    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function afficher($wilaya_id , $id){

        $elements = Boutique::where('wilaya_id' , strval($wilaya_id))
                            ->where('id' , strval($id))->get();
        return view('afBoutique' , compact('elements'));

    }

    public function affichertt($wilayas_id){
    
        $elements = Boutique::where('wilaya_id', strval($wilayas_id))->paginate(3);
        return view('afBoutique' , compact('elements'));
    
    }


    public function affichercat($wilaya_id , $cat_id){
         
        $elements = Boutique::where('wilaya_id' , strval($wilaya_id))
                            ->where('classe' , strval('cat_id'))->paginate(3);
        return view('afBoutique' , compact('elements'));

    }

    public function rate(REQUEST $request){

       request()->validate(['rate' => 'required']);

        $Boutique = Boutique::find($request->id);
        
        $rating = $Boutique->ratings()->where('user_id' , Auth::user()->id)->first();

        if(is_null($rating)){
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = \Auth::id();
        $Boutique->ratings()->save($rating);
        return back();
        }
        else {

            $rating->rating = $request->rate;
            $Boutique->ratings()->save($rating);
            return redirect()->back();
            }

    }
   
}
