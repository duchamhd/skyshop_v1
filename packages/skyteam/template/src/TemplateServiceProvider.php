<?php

namespace Skyteam\Template;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Cate;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
          $cat_list = Cate::all();
          View::share('cat_list',$cat_list);
          
	$this->loadViewsFrom(__DIR__.'/views', 'skyteam');
        // Khai báo thông tin css
        $this->publishes([
        __DIR__.'/public/template' => public_path('skyteam'),
    ], 'public');  
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
	include __DIR__.'\routes\web.php';
        $this->app->make('Skyteam\Template\MyController');
    }
}
