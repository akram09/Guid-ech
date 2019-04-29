<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use willvincent\Rateable\Rateable;


class Restaurant extends Model
{
    public function Wilaya(){
        return $this->belongsto('App/Wilaya');
    }
    public function Restauclass(){
        return $this->belongsTo('App/Restauclass');
    }

    public function Resrervation(){
        return $this->HasMany('App/Resrervation');
    }
    public function Slider(){
        return $this->hasMany('App/Slider');
    }
    use Rateable; use Commentable;

}
