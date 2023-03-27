<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\board_of_director;
use Illuminate\Http\Request;

class BoarOfDirctor extends Controller
{
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $board_of_director = board_of_director::all();
        return view('admin/director/index',compact('board_of_director'));
    }
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // abort(404);
        // return 123;
        return view('admin.director.add');
    }

    /**
     * Store the newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // abort(404);


        // Validation
        $this->validate($request,[
            'name' => 'sometimes|nullable|required|string',
            'desination' => 'sometimes|nullable|required|string',
            'work_station' => 'sometimes|nullable|required|string',
            // 'img_upload' => 'sometimes|nullable|image|max:2048',
            // 'img_upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

      if ($request->file('img_upload')) {

        //image uploads
        $image = $request->file('img_upload');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('backend/director/'),$save_url);
        $img_url = 'backend/director/'.$save_url;

        board_of_director::create([
            'name' => $request->name,
            'desination' => $request->desination,
            'work' => $request->work_station,
            'img_upload' => $img_url,
        ]);
    }
    else{
        board_of_director::create([
            'name' => $request->name,
            'desination' => $request->desination,
            'work' => $request->work_station,
            'img_upload' => 'https://picsum.photos/200/300',
        ]);
    }



      return redirect()->route('director.index')->with('success', 'Director Created successfully.');

    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(board_of_director $director)
    {

        return view('admin.director.edit',compact('director'));
    }

    /**
     * Update the resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,board_of_director $director)
    {

        //adviser Picture Change
      if($req->has('img_upload')) {

        //IF file exites then delete file
        if(file_exists($director->img_upload)){
        unlink($director->img_upload);
           }

        //upload file
        $image = $req->file('img_upload');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('backend/director/'),$save_url);
        $director->img_upload = 'backend/director/'.$save_url;
     }

     $director->name = $req->name;
     $director->desination = $req->desination;
     $director->work = $req->work_station;

     $director->save();
     return redirect()->route('director.index')->with('success', 'Director updated successfully.');

    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(board_of_director $director)
    {
        // abort(404);
        // return $director;

        if($director){
            // if ($adviser->img_upload) {
            //    unlink($adviser->img_upload);
            //    }
               if(file_exists($director->img_upload)){
                unlink($director->img_upload);
                    }
            $director->delete();
           }
           else{
            abort(404);
           }

        session()->flash('error', 'Director Delete Successfully');
        return redirect()->route('director.index');
    }
}
