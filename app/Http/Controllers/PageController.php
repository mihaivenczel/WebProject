<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('pages.welcome');
    }
    public function getAbout()
    {
        return view('pages.about');
    }
}
