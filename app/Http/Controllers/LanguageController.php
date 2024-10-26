<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    /**
     * Switch the application language.
     *
     * @param  string  $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLanguage($locale)
    {
        // Validate that the requested locale is supported
        if (!in_array($locale, ['az', 'en'])) {
            abort(400); // Bad request if locale is not supported
        }

        // Store the locale in the session
        session(['locale' => $locale]);
        // Set the locale for the application
        App::setLocale($locale);

        return Redirect::back();
    }
}
