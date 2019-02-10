<?php

namespace Daveismyname\CompaniesHouse;

use Illuminate\Support\ServiceProvider;

class CompaniesHouseServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/companieshouse.php' => config_path('companieshouse.php'),
            ], 'config');            
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/companieshouse.php', 'companieshouse');

        // Register the service the package provides.
        $this->app->singleton('companieshouse', function ($app) {
            return new CompaniesHouse;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['companieshouse'];
    }
}
