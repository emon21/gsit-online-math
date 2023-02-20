<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_us;

class AboutUsController extends Controller
{
    //

    public function index()
    {
        
        return view('admin/about/index');
    }
}
