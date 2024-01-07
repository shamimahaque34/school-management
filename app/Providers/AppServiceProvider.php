<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);


        View::composer(['backend.includes.header'], function($view){
            $view->with('users', User::orderBy('id', 'desc')->take(1)->get());
        });
    }
}
