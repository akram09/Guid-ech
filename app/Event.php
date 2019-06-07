<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	 /**
     *  @author Abdelwahed Madani Yousfi 
     * Set up  Event Model
     */
   protected $fillable = [
        'event_name', 'start_date', 'end_date'
    ];
}
