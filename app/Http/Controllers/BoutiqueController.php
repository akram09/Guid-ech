<?php

namespace App\Http\Controllers;
use DB;
use App\Boutique;
use App\Http\Requests\BoutiqueRequest;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    public function index(){
        return view('formulaires.registerBoutique');
    }
    
    public function store(BoutiqueRequest $request) {
    
        
        $boutique = new Boutique;

        $boutique->name = $request->input('name');
        $boutique->description = $request->input('description');
        $boutique->email = $request->input('email');
        $boutique->password = $request->input('password');
        $boutique->catégorie = $request->input('catégorie');
        $boutique->willaya = $request->input('willaya');

        $boutique->save();

        session()->flash('success','boutique request sent successfully. we will confirm to you shortly');

        return redirect('/');

    }
public function affichertt(){

    $elements = DB::table('Boutiques')->get();
    return view('affichageDisplay' , compact('elements'));

}

public function afficher($wilayas_id){
    
    $elements = DB::table('boutiques')->where('wilaya_id', strval($wilayas_id))->get();
    return view('affichageDisplay' , compact('elements'));

    
}
public function affichercat($cat, $wilayas_id){
    $elements = DB::table('boutiques')
    ->where('classe', strval($cat))
    ->where('wilaya_id', strval($wilayas_id))
    ->get();
    return view('affichageDisplay' , compact('elements'));
}

   
}
