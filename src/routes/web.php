<?php 
// if not otherwise configured, setup the auth routes
if (config('bytenet.base.setup_auth_routes')) {
    Route::group(['as' => config('bytenet.base.route_prefix').'::'], function () {
        Route::auth();
        Route::get('logout', 'Auth\LoginController@logout');
    });
}

// if not otherwise configured, setup the dashboard routes
if (config('bytenet.base.setup_dashboard_routes')) {
    Route::group(['as' => config('bytenet.base.route_prefix').'::'], function () {
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('/', function () {
            // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
            return redirect(config('bytenet.base.route_prefix').'/dashboard');
        });
    });
}