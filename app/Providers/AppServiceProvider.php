<?php

namespace App\Providers;

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
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
        // Share user menu data with all views
        view()->composer('*', function ($view) {
            $userMenu = app(MenuController::class)->getUserMenu();
            $view->with('usermenu', $userMenu);
        });

        // Share favorites widget data with all views
        view()->composer('*', function ($view) {
            $favourites = app(FavoriteController::class)->getFavouritesWidget();
            $view->with('favouriteswidget', $favourites);
        });

        // Share theme data with all views
        view()->composer('*', function ($view) {
            $theme = Cookie::get('theme');
            $view->with('theme', $theme);
        });

        // Check if theme is requested and update the theme cookie
        view()->composer('*', function ($view) {
            if (Request::has('theme')) {
                $requestedTheme = Request::input('theme');
                $validThemes = ['light', 'dark']; // Add more themes if needed

                if (in_array($requestedTheme, $validThemes)) {
                    Cookie::queue('theme', $requestedTheme, 60 * 24 * 365);
                }

                // Update the $theme variable to reflect the change immediately
                $theme = Cookie::get('theme');
                $view->with('theme', $theme);
            }
        });
    }
}
