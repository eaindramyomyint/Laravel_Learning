<?php

namespace App\Providers;

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
        $this->app->bind('App\Contracts\Dao\Student\StudentDaoInterface', 'App\Dao\Student\StudentDao');
        $this->app->bind('App\Contracts\Services\Student\StudentServiceInterface', 'App\Services\Student\StudentService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
