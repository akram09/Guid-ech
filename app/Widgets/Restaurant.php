<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class Restaurant extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

   /**
     *  @author Abdelwahed Madani Yousfi 
     * this allow to return Restaurant widget to super admin dash 
     */
    public function run()
    {
        $count = \App\Restaurant::count();
        $string = trans_choice('Restaurants', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-wineglass',
            'title'  => "{$count} {$string}",
            'text'   => __('all rastaurant', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('View all Restaurants'),
                'link' => url('/admin/restaurants'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *  @author Abdelwahed Madani Yousfi
     * 
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', Voyager::model('User'));
    }
}
