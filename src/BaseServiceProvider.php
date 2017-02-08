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
        //\DB::listen(function ($query) {
        //    echo "<div style='border: 1px solid red; background: #fbc8c8; display: inline-block'>"
        //        . var_dump($query->sql, $query->bindings)
        //        . "</div>";
        //});

        // LOAD THE VIEWS
        // - first the published views (in case they have any changes)
        $this->loadViewsFrom(resource_path('views/vendor/bytenet/laravel-admin-base'), 'bytenet-admin-base');
        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__ . '/resources/views'), 'bytenet-admin-base');

        // use the vendor translation file as fallback
        $this->loadTranslationsFrom(realpath(__DIR__ . '/resources/lang'), 'bytenet-admin-base');

        // load migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        
        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(__DIR__ . '/config/bytenet/admin/base.php', 'bytenet.admin.base');

        $this->map();

        // -------------
        // PUBLISH FILES
        // -------------
        // publish config file
        $this->publishes([__DIR__.'/config' => config_path()], 'config');
        // publish lang files
        $this->publishes([__DIR__.'/resources/lang' => resource_path('lang/vendor/bytenet-admin-base')], 'lang');
        // publish database seeds
        $this->publishes([__DIR__.'/database/seeds' => database_path('seeds')], 'seeds');

        // publish views
        $this->publishes(
            [__DIR__.'/resources/views' => resource_path('views/vendor/bytenet/laravel-admin-base')],
            'views'
        );
        // publish error views
        $this->publishes([__DIR__.'/resources/views_errors' => resource_path('views/errors')], 'errors');
        // publish public bytenet assets
        $this->publishes([__DIR__.'/public' => public_path('vendor/bytenet')], 'public');
        // publish public AdminLTE assets
        $this->publishes([base_path('vendor/almasaeed2010/adminlte') => public_path('vendor/adminlte')], 'adminlte');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // register the current package
        //$this->app->bind('bytenet.admin.base', function ($app) {
        //    return new Base($app);
        //});
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
        //Route::middleware('bytenet.auth', app\Http\Middleware\ByteNetAuthenticate::class); // Laravel 5.3
        Route::aliasMiddleware('bytenet.auth', app\Http\Middleware\ByteNetAuthenticate::class);

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
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
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
