<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function policy()
    {
        return view('pages.gdpr.privacy');
    }

    public function terms()
    {
        return view('pages.gdpr.terms');
    }

    public function cookies()
    {
        return view('pages.gdpr.cookies');
    }
}

