<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\board_of_adviser;
use App\Models\board_of_director;
use Symfony\Component\HttpFoundation\Session\Session;

class BoardOfAdviser extends Controller
{
    public function index()
    {

        $board_of_adviser = board_of_adviser::all();
        return view('admin/adviser/index',compact('board_of_adviser'));
    }

    public function add()
    {
        return view('admin.adviser.add');
    }

    public function insert(Request $req)
    {
       // return $req->img_upload;

       // Validation
       $this->validate($req,[
        'name' => 'sometimes|nullable|required|string',
        'desination' => 'sometimes|nullable|required|string',
        'desination_title' => 'sometimes|nullable|required|string',
        'work_station' => 'sometimes|nullable|required|string',
        // 'img_upload' => 'sometimes|nullable|image|max:2048',
        // 'img_upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    //insert
  if ($req->file('img_upload')) {

        //featured image uploads
        $image = $req->file('img_upload');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('backend/adviser/'),$save_url);
        $img_url = 'backend/adviser/'.$save_url;

         board_of_adviser::create([
          'name' => $req->name,
          'desination' => $req->desination,
          'our_dauty' => $req->desination_title,
          'work' => $req->work_station,
          'img_upload' => $img_url,
        ]);
  }
  else{
          board_of_adviser::create([
           'name' => $req->name,
           'desination' => $req->desination,
          'our_dauty' => $req->desination_title,
           'work' => $req->work_station,
           'img_upload' => 'https://picsum.photos/200/300',

     ]);
  }



  session()->flash('success', 'Adviser Create Successfully');
  return redirect()->route('adviser.index');


// board_of_director::create([
//     'name' => $req->name,
//             'desination' => $req->desination,
//             'work' => $req->work_station,
//             'img_upload' => $img_url,
// ]);

// return redirect()->route('posts.index')->with('status', 'Post Created Successfully');
    }


    public function edit($edit_id)
    {
        // $adviser = board_of_adviser::where('id',$edit)->get();
        $adviser = board_of_adviser::find($edit_id);
        // return $adviser;
       return view('admin.adviser.edit',compact('adviser'));
    }

    public function update(Request $req)
    {


        $adviser = board_of_adviser::find($req->edit_id);


        //adviser Picture Change
      if($req->has('img_upload')) {

           //IF file exites then delete file
           if(file_exists($adviser->img_upload)){
           unlink($adviser->img_upload);
              }

           //upload file
           $image = $req->file('img_upload');
           $save_url = time() . '.' .$image->getClientOriginalextension();
           $image->move(public_path('backend/adviser/'),$save_url);
           $adviser->img_upload = 'backend/adviser/'.$save_url;
        }

        $adviser->name = $req->name;
        $adviser->desination = $req->desination;
        $adviser->our_dauty = $req->desination_title;
        $adviser->work = $req->work_station;

        $adviser->save();
        return redirect()->route('adviser.index')->with('success', 'Adviser Updated Successfully.');
    }

    public function delete($delete)
    {
        $adviser = board_of_adviser::find($delete);
       // return $adviser;

       if($adviser){
        // if ($adviser->img_upload) {
        //    unlink($adviser->img_upload);
        //    }
           if(file_exists($adviser->img_upload)){
            unlink($adviser->img_upload);
                }
        $adviser->delete();
       }
       else{
        abort(404);
       }
      // Session::flash('error','Team Delete Successfully');
    //   return redirect()->route('admin.about')->with('error', 'User updated successfully.');

    session()->flash('error', 'Adviser Delete Successfully');
      return redirect()->route('adviser.index');
    }
}
