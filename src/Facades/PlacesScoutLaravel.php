<?php

namespace KevinEm\PlacesScoutLaravel\Facades;


use Illuminate\Support\Facades\Facade;

class PlacesScoutLaravel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return \KevinEm\PlacesScoutLaravel\PlacesScoutLaravel
     */
    protected static function getFacadeAccessor()
    {
        return 'places-scout-laravel';
    }
}