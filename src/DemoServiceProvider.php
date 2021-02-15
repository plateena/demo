<?php

namespace Plateena\Demo;

use Illuminate\Support\ServiceProvider;


/**
 * Class DemoServiceProvider
 * @author yourname
 */
class DemoServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }
}
