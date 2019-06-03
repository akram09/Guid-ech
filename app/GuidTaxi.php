<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuidTaxi extends Model
{
    public function Wilaya(){

        return $this->belongsTo('App\Wilaya');
   
    }
}
