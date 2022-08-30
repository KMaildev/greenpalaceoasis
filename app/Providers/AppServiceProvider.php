<?php

namespace App\Providers;

use App\Models\Country;
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
        $lang = session('lang');
        $countries = Country::all();
        view()->share('countries', $countries, 'lang', $lang);
    }
}
