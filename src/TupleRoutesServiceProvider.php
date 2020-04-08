<?php

namespace Allenjd3\TupleRoute;

use Allenjd3\TupleRoute\Commands\TupleRoutesCommand;
use Illuminate\Support\ServiceProvider;

class TupleRoutesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if ($this->app->runningInConsole()) {
            $this->commands([
                TupleRoutesCommand::class
            ]);
        }
    }
}
