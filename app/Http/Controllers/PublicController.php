<?php

namespace App\Http\Controllers;

use App\Helpers\Seo;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        $data = Seo::general();
        return view('public.home', $data);
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        $data = Seo::general();
        return view('public.about', $data);
    }

    /**
     * Display the services page.
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        $data = Seo::general();
        return view('public.services', $data);
    }
}
