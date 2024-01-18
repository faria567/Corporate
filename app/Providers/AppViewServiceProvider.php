<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;
use App\Models\Product;
use App\Models\BasicSetting;
use App\Models\Team;
use App\Models\Partner;

class AppViewServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }


    public function boot(): void
    {
         View::composer(['layouts.front', 'master.front-end.child', 'layouts.child'], function ($view) {
            $services   = Service::all();
            $products   = Product::all();
            $setting    = BasicSetting::first();
            $teams      = Team::all();
            $partners   = Partner::all();
            $industrys   = Industry::all();
            $sliders   = Slider::all();
            $blogs   = Blog::all();
            $abouts   = Content::all();
            $view->with(compact('services', 'products', 'setting', 'teams', 'partners','industrys','sliders','blogs','abouts'));
        });
    }
}
