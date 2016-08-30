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

        $this->loadTranslationsFrom(realpath(__DIR__.'/resources/lang'), 'bytenet');


        $this->setupRoutes($this->app->router);

        // -------------
        // PUBLISH FILES
        // -------------
        // publish config file
        $this->publishes([__DIR__.'/config' => config_path()], 'config');
        // publish lang files
        $this->publishes([__DIR__.'/resources/lang' => resource_path('lang/vendor/bytenet')], 'lang');

        // publish views
        $this->publishes([__DIR__.'/resources/views' => resource_path('views/vendor/bytenet/laravel-admin-base')], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        // register the 'admin' middleware
        $router->middleware('auth.bytenet', app\Http\Middleware\AuthenticateByteNet::class);

        $router->group(['namespace' => 'ByteNet\LaravelAdminBase\app\Http\Controllers'], function ($router) {
            Route::group(['middleware' => 'web', 'prefix' => config('bytenet.base.route_prefix')], function () {

                // if not otherwise configured, setup the auth routes
                if (config('bytenet.base.setup_auth_routes')) {
                    Route::auth();
                }

                // if not otherwise configured, setup the dashboard routes
                if (config('bytenet.base.setup_dashboard_routes')) {
                    Route::get('dashboard', 'AdminController@dashboard');
                    Route::get('/', function () {
                        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
                        return redirect(config('bytenet.base.route_prefix').'/dashboard');
                    });
                }
            });
        });
    }
}
