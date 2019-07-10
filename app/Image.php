<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Place(){
        return $this->belongsTo('App\Place');
    }
}
