<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Resturant;

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
        View::composer('home.navbar', function ($view) {
            $resturants  = Resturant::all();
            $view->with('resturants', $resturants );
        });
    
        View::composer('home.navbar', function ($view) {
            $categories  = Category::all();
            $view->with('categories', $categories );
        });
        View::composer('home.footer', function ($view) {
            $categories  = Category::all();
            $view->with('categories', $categories );
        });
    }
}
