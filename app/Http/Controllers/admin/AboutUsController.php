<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_us;
use App\Models\AboutUS;
use App\Models\ourTarget;

class AboutUsController extends Controller
{
    //

    public function index()
    {

        $about_us = AboutUS::first();
        $ourSlogan = ourTarget::first();
        return view('admin/about/index',compact('about_us','ourSlogan'));
    }

    public function demo()
    {
        return view('admin.about.demo');
    }

    public function update(Request $req)
    {

        // return 3333333;

        // $adviser = AboutUS::find($req->edit_id);

        // return $req->edit_id;
        $abotUs = AboutUS::find($req->edit_id);


        // $abotUs = New AboutUS();
        $abotUs->about_olympiad_desc = $req->about_olympiad;
        $abotUs->about_btea_desc = $req->about_btea;
        $abotUs->save();
        return redirect()->route('admin.about')->with('success','About Us Update Successfully...');
        // return redirect()->route('adviser.index')->with('success', 'Adviser Updated Successfully.');
    }
}
