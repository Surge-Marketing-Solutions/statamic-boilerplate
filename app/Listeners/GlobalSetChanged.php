<?php

namespace App\Listeners;

use Statamic\Events\GlobalVariablesSaving;
use Statamic\Events\GlobalSetSaved;
use Illuminate\Support\Facades\Cache;

class GlobalSetChanged
{
    /**
     * Handle the event.
     *
     * @param  \Statamic\Events\GlobalVariablesSaving  $event
     * @return void
     */

    public function __construct() {
        \Log::info('This should be running');
    }

    public function handle(GlobalVariablesSaving $event)
    {
        \Log::info('Event should be firing.');

        if( $event->variables->robots_contents ) {
            \Log::info('We have robots content to update!');
            
            $content = str_replace("robots_contents: |-\n  ", "", $event->variables->robots_contents);
            
            \Log::info('Content to be updated - ' . strval($content));
            
            file_put_contents(public_path('./robots.txt'), $content);
            
            \Log::info('We\'ve updated the robots.txt content! - ' . strval($content));
        } elseif( $event->variables->llms_content ) {
            \Log::info('We have LLMS content to update!');
            
            $content = str_replace("llms_content: |-\n  ", "", $event->variables->llms_content);
            
            \Log::info('Content to be updated - ' . strval($content));

            file_put_contents(public_path('./llms.txt'), $content);

            \Log::info('We\'ve updated the llms.txt content! - ' . strval($content));
        }
    }
}