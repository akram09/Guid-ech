<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use DB;

class wilaya extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];
    

     /**
     *  @author Abdelwahed Madani Yousfi 
     * this allow to return Wilaya widget to super admin dash 
     */
    public function run()
    {
        $count = DB::table('wilayas')->count();
        $string = trans_choice('wilaya', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-logbook',
            'title'  => "{$count} {$string}",
            'text'   => __('all wilaya ', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('View all'),
                'link' => url('/admin/wilayas'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
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
