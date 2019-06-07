<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class boutique extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     *  @author Abdelwahed Madani Yousfi
     * this allow to return boutique widget to super admin dash 
     */
    public function run()
    {
        $count = \App\Boutique::count();
        $string = trans_choice('boutique', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} {$string}",
            'text'   => __('boutique ', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('View all '),
                'link' => route('home'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
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
