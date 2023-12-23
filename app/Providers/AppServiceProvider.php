<?php

namespace App\Providers;

use App\Http\Controllers\MenuController;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $userMenu = app('App\Http\Controllers\MenuController')->getUserMenu();
            $view->with('usermenu', $userMenu);
        });

        view()->composer('*', function ($view){
            $favourites = app('App\Http\Controllers\FavoriteController')->getFavouritesWidget();
            $view->with('favouriteswidget', $favourites);
        });
    }

}
