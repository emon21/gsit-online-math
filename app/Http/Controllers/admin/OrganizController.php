<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizMember;

use Illuminate\Http\Request;

class OrganizController extends Controller
{

     /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $OrganizMember = OrganizMember::orderBy('id','desc')->get();
        return view('admin/organize/index',compact('OrganizMember'));
    }


     /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organize.add');
    }


      /**
     * Store the newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->name;

        // Validation
        $this->validate($request,[
            'name' => 'sometimes|nullable|required|string',
            'desination' => 'sometimes|nullable|required|string',
            'desination_title' => 'sometimes|nullable|required|string',
            'work_station' => 'sometimes|nullable|required|string',
            // 'img_upload' => 'sometimes|nullable|image|max:2048',
            // 'img_upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


      if($request->has('img_upload')) {

            //upload file
            $image = $request->file('img_upload');
            $save_url = time() . '.' .$image->getClientOriginalextension();
            $image->move(public_path('backend/organize/'),$save_url);
            $img_url = 'backend/organize/'.$save_url;

            OrganizMember::create([
                'organiz_name' => $request->name,
                'organiz_desination' => $request->desination,
                'desination_title' => $request->desination_title,
                'work' => $request->work_station,
                'organiz_picture' => $img_url,
            ]);

        }

     else{

        OrganizMember::create([
            'organiz_name' => $request->name,
            'organiz_desination' => $request->desination,
            'desination_title' => $request->desination_title,
            'work' => $request->work_station,
            'organiz_picture' => 'https://picsum.photos/200/300',
      ]);

     }



        return redirect()->route('organize.index')->with('success', 'Organizing Created successfully.');
    }


   /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {


    }

    /**
     * Show the form for editing the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(OrganizMember $organize)
    {

        return view('admin.organize.edit',compact('organize'));
    }
    /**
     * Update the resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,OrganizMember $organize)
    {

        //adviser Picture Change
      if($req->has('img_upload')) {

        //IF file exites then delete file
        if(file_exists($organize->img_upload)){
        unlink($organize->img_upload);
           }

        //upload file
        $image = $req->file('img_upload');
        $save_url = time() . '.' .$image->getClientOriginalextension();
        $image->move(public_path('backend/organize/'),$save_url);
        $organize->organiz_picture = 'backend/organize/'.$save_url;
     }

     $organize->organiz_name = $req->organiz_name;
     $organize->organiz_desination = $req->desination;
     $organize->desination_title = $req->desination_title;
     $organize->work = $req->work_station;

     $organize->save();
     return redirect()->route('organize.index')->with('success', 'Organizing updated successfully.');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrganizMember $organize)
    {
        if($organize){
               if(file_exists($organize->organiz_picture)){
                unlink($organize->organiz_picture);
            }
            $organize->delete();
           }
           else{
            abort(404);
           }
        session()->flash('error', 'Organizing Delete Successfully');
        return redirect()->route('organize.index');
    }
}
