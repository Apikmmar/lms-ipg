<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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
        //
        Gate::define('student', function($user) {
            return $user->hasRole('Student');
        });

        Gate::define('lecturer', function($user) {
            return $user->hasRole('Lecturer');
        });

        Gate::define('administrator', function($user) {
            return $user->hasRole('Administrator');
        });
    }
}
