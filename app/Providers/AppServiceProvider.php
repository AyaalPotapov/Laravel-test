<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('date', date('Y'));

        View::composer('user*', function($view) 
        {
            $view->with('balace', 12345);
        });

        View::composer('admin*', function($view) 
        {
            $view->with('root', 'admin');
            $view->with('balance', 125);
        });
    }
}
