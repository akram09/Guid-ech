<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

    /**
    * @author Madani Yousfi Abdelwahed 
    *
    * @return \Illuminate\Http\Response
    */
class MultilanguageController extends Controller 
{  
	                   /*this function allow to change the language by setLocale method and store it in the session*/
   
    public function index($locale)   
    {   
       
        App::setLocale($locale);
                                   
        session()->put('locale', $locale); //store the locale in session so that the middleware can register it
        
        return redirect()->back();
    }
}
