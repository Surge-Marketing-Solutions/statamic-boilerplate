<?php

namespace App\Listeners;

use Illuminate\Validation\ValidationException;
use Statamic\Events\FormSubmitted;

class SurgePoohJar
{
    public function handle(FormSubmitted $event): void
    {
        $inputCheck = request()->input('first_name_alt');

        \Log::info('Input check - ' . json_encode($inputCheck));

        if( $inputCheck ) {
            abort(404);
        }
    }
}