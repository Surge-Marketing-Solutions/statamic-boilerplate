<?php

namespace App\Listeners;

use Illuminate\Validation\ValidationException;
use Statamic\Events\FormSubmitted;

//! Please make sure to add the following field to any forms you'd like to run this on
//* <input type="hidden" name="first_name_alt" value="" id="first_name_alt" />

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