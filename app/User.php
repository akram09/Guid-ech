<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail; // email verification
use Illuminate\Foundation\Auth\User as Authenticatable;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;





class User extends \TCG\Voyager\Models\User  implements MustVerifyEmail // email verification
{
    /********
     * 
     * 
     * Moncef Reggam / Madani Youcefi Abdelwahed
     * 
     * *******/

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [                
        'name', 'email', 'password','country','city','address','is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    use Favoriteability;

    public function Restaurants(){
        return $this->hasMany('App\Restaurant');
    }

    public function Contacts(){
        return $this->hasMany('App\Contact');
    }
    
    public function Sliders(){
        return $this->hasMany('App\Sliders');
    }
    public function Categories(){
        return $this->hasMany('App\Category');
    }
}
