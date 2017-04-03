<?php

namespace Skyteam\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'skyteam');
        // Khai báo thông tin css
        $this->publishes([
        __DIR__.'/public/admin_asset' => public_path('skyteam'),
    ], 'public');  

    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
	include __DIR__.'\routes\web.php';
        //$this->app->make('Skyteam\Admin\Admin_Product_Controller');
        $this->app->make('Skyteam\Admin\SlideController');
        $this->app->make('Skyteam\Admin\UserController');
    }
}
