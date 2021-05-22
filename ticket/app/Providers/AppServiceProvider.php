<?php

namespace App\Providers;

use App\purchase\Bank;
use App\purchase\zarin_pal;
use App\View\Data;
use Illuminate\Support\Facades\Schema;
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
        resolve(Data::class)->handle();
        Schema::defaultStringLength(191);
        $this->app->singleton(Bank::class,function (){
            return new zarin_pal('246f5f57-79c3-4968-91e7-25ccc4f1e099');
        });
    }
}
