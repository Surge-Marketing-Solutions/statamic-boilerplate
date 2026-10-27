<?php

namespace Surgems\RedirectUrls\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Statamic\Support\Str;
use Surgems\RedirectUrls\Facades\Redirect;
use Throwable;

class HandleRedirects
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($response->status() !== 404 || ! config('statamic.redirect-urls.enable', true)) {
            return $response;
        }

        try {
            $url = Str::start($request->getPathInfo(), '/');
            $url = Str::substr(Str::finish($url, '/'), 0, -1);

            if (! $redirect = Redirect::findByUrl($url)) {
                return $response;
            }

            $destination = $redirect->to();
            $query = $request->server->get('QUERY_STRING', '');

            if ($query !== '') {
                // Preserve the original query encoding and keep any fragment last.
                $parts = explode('#', $destination, 2);
                $separator = str_contains($parts[0], '?') ? '&' : '?';

                if (str_ends_with($parts[0], '?') || str_ends_with($parts[0], '&')) {
                    $separator = '';
                }

                $destination = $parts[0].$separator.$query;

                if (isset($parts[1])) {
                    $destination .= '#'.$parts[1];
                }
            }

            return redirect($destination, $redirect->type());
        } catch (Throwable $exception) {
            if (function_exists('reportException')) {
                reportException($exception);
            } else {
                report($exception);
            }

            return $response;
        }
    }
}
