<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
	 /**
     *  @author Abdelwahed Madani Yousfi 
     *  set up Contact Us Model
     */
    public $table = 'contactus';  
    public $fillable = ['name','email','subject','message'];  
}
