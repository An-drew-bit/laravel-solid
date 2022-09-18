<?php

namespace App\Providers;

use App\Utilities\Notifications\Contract\NotificationContract;
use App\Utilities\Notifications\TelegramNotification;
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
    public function boot(): void
    {
        $this->app->bind(NotificationContract::class, TelegramNotification::class);
    }
}
