<?php

namespace KevinEm\PlacesScoutLaravel;


use Illuminate\Support\ServiceProvider;
use KevinEm\PlacesScoutPHP\PlacesScout;

class PlacesScoutLaravelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('places-scout.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config.php', 'places-scout');

        $this->app['places-scout-laravel'] = $this->app->share(function ($app) {
            return new PlacesScout([
                'username' => $app['config']['places-scout.username'],
                'password' => $app['config']['places-scout.password']
            ]);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'places-scout-laravel'
        ];
    }
}