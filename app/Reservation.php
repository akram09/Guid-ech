<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function Restaurent(){
        return $this->belongTo('App\Restaurant');
    }
}
