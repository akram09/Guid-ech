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
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Restaurant::count();
        $string = trans_choice('Restaurants', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-wineglass',
            'title'  => "{$count} {$string}",
            'text'   => __('Click on button below to view all rastaurant', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('View all Restaurants'),
                'link' => route('home'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', Voyager::model('User'));
    }
}
