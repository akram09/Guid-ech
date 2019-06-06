<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/

     public function User(){
         return $this->belongsTo('App\User');
     }

     public function Restaurant(){
         return $this->belongsTo('App\Restaurant');
     }
}
