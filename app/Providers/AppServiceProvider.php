<?php

namespace App\Providers;

use App\Repositories\Analytics\EloquentAnalitics;
use App\Repositories\Analytics\IAnalitics;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IAnalitics::class, EloquentAnalitics::class);
    }


}
