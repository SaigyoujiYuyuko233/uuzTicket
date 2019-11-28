<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {

        // auth
        Route::middleware('web')
            ->namespace($this->namespace.'\Auth')
            ->prefix('/auth')
            ->group(base_path('routes/auth.php'));

        // tickets
        Route::middleware(['web', 'auth', 'verified'])
            ->namespace($this->namespace . '\Tickets')
            ->prefix('/tickets')
            ->group(base_path('routes/tickets.php'));

        // tickets
        Route::middleware(['web'])
            ->namespace($this->namespace)
            ->group(base_path('routes/base.php'));

        // admin
        Route::middleware(['web', 'auth', 'verified', 'auth.admin'])
            ->namespace($this->namespace . '\Admin')
            ->prefix('/admin')
            ->group(base_path('routes/admin.php'));


    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
