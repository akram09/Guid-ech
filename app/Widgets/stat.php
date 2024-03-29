<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use DB;


class stat extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     *  @author Abdelwahed Madani Yousfi 
     * this allow to return statistiques widget to super admin dash 
     */
    public function run()
    {
        $count = DB::table('link_views')->count();
        $string = trans_choice('Visit', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-truck',
            'title'  => "{$count} {$string}",
            'text'   => __('statisiques', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('View all statisiques'),
                'link' => url('guidechstat'),
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
