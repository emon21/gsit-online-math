<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ourTarget;
use Illuminate\Http\Request;

class OurSlogan extends Controller
{
    public function index()
    {
        # code...
    }

    public function update(Request $req)
    {
        $ourTarget = ourTarget::find($req->edit_id);


        // $abotUs = New AboutUS();
        $ourTarget->our_mission = $req->our_mission;
        $ourTarget->our_vision = $req->our_vision;
        $ourTarget->our_goal = $req->our_goal;
        $ourTarget->save();
        return redirect()->route('admin.about')->with('success','Our Slogan Update Successfully...');
    }
}
