<?php

Route::group([
    'middleware' => 'web',
    'prefix' => config('bytenet.admin.base.route_prefix'),
    'namespace' => 'ByteNet\LaravelAdminBase\app\Http\Controllers',
    'as' => config('bytenet.admin.base.route_prefix').'::',
], function ($router) {

    // if not otherwise configured, setup the auth routes
    if (config('bytenet.admin.base.setup_auth_routes')) {
        Route::auth();
        Route::get('logout', 'Auth\LoginController@logout');
    }

    // if not otherwise configured, setup the dashboard routes
    if (config('bytenet.admin.base.setup_dashboard_routes')) {
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('/', function () {
            // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
            return redirect(config('bytenet.admin.base.route_prefix').'/dashboard');
        });
    }

});
