<?php

namespace Skyteam\Shoppingcart;

use Illuminate\Support\ServiceProvider;

class ShoppingcartServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       include __DIR__ . '\routes\web.php';
       $this->app->make('Skyteam\Shoppingcart\ShoppingcartController');
    }
}
