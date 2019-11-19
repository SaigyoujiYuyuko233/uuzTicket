<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        // load the debugging env support
        if ($this->app->environment() == 'local' || config('APP_DEBUG') == false){

            /*
             * register
             */

            // debug thins
            $this->app->register('Barryvdh\Debugbar\ServiceProvider');
            $this->app->register('Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');

            /*
             * alias
             */
            $this->app->alias('Debugbar', 'Barryvdh\Debugbar\Facade');
        }

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
