<?php

namespace App\Providers;
use DB;
use App\Color;
use App\Tovar;
use App\Obem;
use App\Type;
use App\Wish;
use App\Korzina;
use App\City;
use App\Podborki;
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
        View::share('type',Type::all());
        View::share('podb',Podborki::all());
    }
}
