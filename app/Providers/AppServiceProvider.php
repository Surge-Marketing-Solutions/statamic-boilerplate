<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;

use Illuminate\Support\Facades\Event;
use Statamic\Events\FormSubmitted;
use App\Listeners\SurgePoohJar;

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
        Event::listen(FormSubmitted::class, SurgePoohJar::class);
    }
}
