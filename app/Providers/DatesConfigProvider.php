<?php

namespace App\Providers;

use App\DatesConfig\DatesConfig;
use Illuminate\Support\ServiceProvider;

class DatesConfigProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('datesconfig',function(){
            return new DatesConfig();
        });
    }
}
