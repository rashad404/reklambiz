<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
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
        View::share([
            'metaTitle' => $view->metaTitle ?? '',
            'metaKeywords' => $view->metaKeywords ?? '',
            'metaDescription' => $view->metaDescription ?? '',
            'metaImg' => $view->metaImg ?? '',
            'menus' => Menu::all(),
            'locale' => App::getLocale(),
        ]);
    }
}
