<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class hotels extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

     /**
     *  @author Abdelwahed Madani Yousfi
     * this allow to return hotels widget to super admin dash 
     */
    public function run()
    {
        $count = \App\Hotel::count();
        $string = trans_choice('hotels', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-logbook',
            'title'  => "{$count} {$string}",
            'text'   => __(' all hotels', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('View all '),
                'link' => url('admin/hotels'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
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
