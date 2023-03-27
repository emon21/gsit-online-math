<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Models\AboutUS;
use App\Models\board_of_adviser;
use App\Models\board_of_director;
use App\Models\OrganizMember;

class WebsiteController extends Controller
{
    //

    public function index()
    {

        return view('website.index');
        // return view('welcome');
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

    public function aboutUs()
    {
        $about_us = AboutUS::first();
        $OrganizMember = OrganizMember::all();
        $board_of_director = board_of_director::all();
        $board_of_adviser = board_of_adviser::all();
        //  return $adviser_list;
        return view('website.about',compact('about_us','OrganizMember','board_of_director','board_of_adviser'));
    }

    public function target()
    {
        return view('website.target');

    }
}
