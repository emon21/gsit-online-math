<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Models\About_us;
use App\Models\AboutUS;

class WebsiteController extends Controller
{
    //

    public function index()
    {
        // return view('website.index');
        return view('welcome');
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

    public function about()
    {
        $about_us = AboutUS::all();
        return view('website.about',compact('about_us'));
    }

    public function target()
    {
        return view('website.target');

    }
}
