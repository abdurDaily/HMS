<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\User;
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
        view()->composer('backend.layout.layout', function ($view) {
            $users = User::latest()->where('status',0)->get()->take(3);
            $notifications = User::latest()->where('status',0)->count();

            $view->with([
                'user' => $users,
                'notifications' => $notifications,
            ]);    
        });
        
    }
}
