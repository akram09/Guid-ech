<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /********
     * 
     * 
     * Moncef Reggam
     * 
     * *******/

    public function Restaurent(){
        return $this->belongTo('App\Restaurant');
    }

    public function User(){
        return $this->belongsTO('App\User');
    }
}
