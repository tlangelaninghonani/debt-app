<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Application;

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
        $links = array(
            "desktopCss" => "/css/desktop.css",
            "desktopJs" => "/js/desktop.js",
            "logo" => "/logo.png",
            "application" => new Application()
        );
        View::share("links", $links);
    }
}
