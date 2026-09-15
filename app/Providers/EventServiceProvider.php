<?php

namespace App\Providers;

use App\Listeners\GlobalSetChanged;
use App\Listeners\SurgePoohJar;

use Statamic\Events\GlobalVariablesSaving;
use Statamic\Events\FormSubmitted;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        GlobalVariablesSaving::class => [
            GlobalSetChanged::class,
        ],
        FormSubmitted::class => [
            SurgePoohJar::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}