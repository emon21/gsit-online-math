<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class WebsiteController extends Controller
{
    //

    public function index()
    {
        return view('website.index');
    }

    public function faq()
    {
        return View('website.faq');
    }

    // search

    public function search()
    {
        return view('website.search');
    }

    public function result()
    {
        return view('website.result');
    }
}
