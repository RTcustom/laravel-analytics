<?php namespace RTcustom\LaravelAnalytics;

use Illuminate\Support\Facades\Facade;

class LaravelAnalyticsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravelAnalytics';
    }
}
