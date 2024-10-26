<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('locale')) {
            $locale = $request->input('locale');

            // Validation (optional, but recommended):
            if (! in_array($locale, ['en', 'az'])) {
                abort(400);
            }

            App::setLocale($locale);
            session(['locale' => $locale]); // Store the locale in the session
        } elseif(null !== session('locale')) {
            // If no locale is specified in the request, use the session locale
            App::setLocale(session('locale')); 
        } else {
            App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}