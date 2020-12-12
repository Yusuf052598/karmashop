<?php

namespace App\Providers;

use App\Brands;
use App\Categories;
use App\Pays;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        $categories=Categories::all();
        $pays=Pays::all();
        return View::share(compact('categories','pays'));
    }
}
