<?php

namespace ByteNet\LaravelAdminBase;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Route;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // LOAD THE VIEWS
        // - first the published views (in case they have any changes)
        $this->loadViewsFrom(resource_path('views/vendor/bytenet/laravel-admin-base'), 'bytenet');
        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__ . '/resources/views'), 'bytenet');

        // use the vendor translation file as fallback
        $this->loadTranslationsFrom(realpath(__DIR__ . '/resources/lang'), 'bytenet');
        
        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(__DIR__ . '/config/bytenet/base.php', 'bytenet.base');

        $this->map();

        // -------------
        // PUBLISH FILES
        // -------------
        // publish config file
        $this->publishes([__DIR__.'/config' => config_path()], 'config');
        // publish migrations
        $this->publishes([__DIR__.'/database/migrations' => database_path('migrations')], 'migrations');
        // publish seed
        $this->publishes([__DIR__.'/database/seeds' => database_path('seeds')], 'seeds');
        // publish lang files
        $this->publishes([__DIR__.'/resources/lang' => resource_path('lang/vendor/bytenet')], 'lang');

        // publish views
        $this->publishes(
            [__DIR__.'/resources/views' => resource_path('views/vendor/bytenet/laravel-admin-base')],
            'views'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // register the current package
        $this->app->bind('bytenet.admin.base', function ($app) {
            return new Base($app);
        });
    }


    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map()
    {
        // register the 'admin' middleware
        Route::middleware('bytenet.auth', app\Http\Middleware\ByteNetAuthenticate::class);

        $this->mapWebRoutes();

        $this->mapApiRoutes();
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
        Route::group([
            'middleware' => 'web',
            'prefix' => config('bytenet.base.route_prefix'),
            'namespace' => 'ByteNet\LaravelAdminBase\app\Http\Controllers',
            'as' => config('bytenet.base.route_prefix').'::',
        ], function ($router) {
            require __DIR__ . '/routes/web.php';
        });
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
        //
    }
}
