<?php
namespace ByteNet\LaravelAdminBase;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
	
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    }
	
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
    }
}