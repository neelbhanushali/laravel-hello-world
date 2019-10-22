<?php

namespace NeelBhanushali\Commands;

use Illuminate\Support\ServiceProvider;

class LaravelHelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.neelbhanushali.hello-world', function ($app) {
            return $app['NeelBhanushali\Commands\HelloWorld'];
        });

        $this->commands('command.neelbhanushali.hello-world');
    }
}
