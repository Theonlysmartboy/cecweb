<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leader;
use Session;
use Image;

class LeadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if (Session::has('adminSession')) {
            $title = "CEC | Leaders";
            $leaders = Leader::get();
            return view('leader.index')->with(compact('title','leaders'));
            }
            else{
                return redirect()->back()->with('flash_message_error', 'Access denied!');
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        if (Session::has('adminSession')) {
            $title = "CEC | Leaders | Add" ;
            return view('leader.create')->with(compact('title'));
            }
            else{
                return redirect()->back()->with('flash_message_error', 'Access denied!');
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //User must be admin to add
        if (Session::has('adminSession')) {
             //Get all post data
             $data = $request->all();
             $leader = new Leader;
             $leader->title = $data['l_title'];
             $leader->name = $data['l_name'];
             //check if an image has been selected
             if (!empty($data['l_image'])) {
                 if ($request->hasFile('l_image')) {
                     $image_temp = $request->file('l_image');
                     if ($image_temp->isValid()) {
                         $extension = $image_temp->getClientOriginalExtension();
                         $filename = mt_rand(000, 9999999999) . '.' . $extension;
                         $small_filepath = public_path().'/images/webimgs/pastors/uploads/small/' . $filename;
                         $large_filepath = public_path().'/images/webimgs/pastors/uploads/' . $filename;
                         //upload the image
                         Image::make($image_temp)->resize(100, 100)->save($small_filepath);
                         Image::make($image_temp)->resize(5184,3456)->save($large_filepath);
                         $leader->avatar = $filename;
                     }
                 }
             }
             $leader->bio = $data['l_bio'];
             $leader->email = $data['l_mail'];
             $leader->tel = $data['l_tel'];
             $leader->address = $data['l_address'];
             $leader->smedia = $data['l_media'];
             $leader->save();
             return redirect()->back()->with('flash_message_success', 'leader successfuly added');    
    }
        // if not return back to where it is from
    else{
        return redirect()->back()->with('flash_message_error', 'Access denied!');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        if(Session::has('adminSession')){
            $title = "CEC | Edit Leader Details";
            //Get the current leader details
            $leader_data = Leader::where(['id' => $id])->first();
            return view('leader.edit')->with(compact('title','leader_data'));

        }
         // if not return back to where it is from
    else{
        return redirect()->back()->with('flash_message_error', 'Access denied!');
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)   {
        if(Session::has('adminSession')){
        $data = $request->all();
        //upload image
        if ($request->hasFile('l_image')) {
            $image_temp = $request->file('l_image');
            if ($image_temp->isValid()) {
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(000, 9999999999) . '.' . $extension;
                $small_image_path = public_path().'/images/webimgs/pastors/uploads/small/' . $filename;
                $large_image_path = public_path().'/images/webimgs/pastors/uploads/' . $filename;
                //Resize and upload images
                Image::make($image_temp)->resize(100,100)->save($small_image_path);
                Image::make($image_temp)->resize(5184,3456)->save($large_image_path);
                $leader = Leader::where(['id' => $id])->first();
                //Get leader image paths
                $image_path = public_path().'/images/webimgs/pastors/uploads/small/';
                $large_image_path = public_path().'/images/webimgs/pastors/uploads/';
                  //check if user had previously uploaded an image
                  if($leader->image !=null || $leader->image!=""){
                    //Delete the image if exists
                    if (file_exists($image_path . $leader->image)) {
                        unlink($image_path . $leader->image);
                    }
                    //Delete the large image too
                    if (file_exists($large_image_path . $leader->image)) {
                        unlink($large_image_path . $leader->image);
                    }
                }
            }
        } else {
            $filename = $data['current_image'];
        }
        Leader::where(['id' => $id])->update(['title' => $data['l_title'], 'name' => $data['l_name'],
            'avatar' => $filename, 'bio' => $data['l_bio'], 'email' => $data['l_mail'], 'tel' => $data['l_tel'],
            'address' => $data['l_address'],'smedia' => $data['l_media'],]);
            return redirect('leaders/')->with('flash_message_success', 'Leader details updated Successfully');
    }else{
        return redirect()->back()->with('flash_message_error', 'Access denied!!');
}

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Session::has('adminSession')) {
            if (!empty($id)) {
                //get the particular restaurant form the db
                $leader = Leader::where(['id' => $id])->first();
              //Get leader image paths
              $image_path = public_path().'/images/webimgs/pastors/uploads/small/';
              $large_image_path = public_path().'/images/webimgs/pastors/uploads/';
                //check if user had previously uploaded an image
                if($leader->image !=null || $leader->image!=""){
                  //Delete the image if exists
                  if (file_exists($image_path . $leader->image)) {
                      unlink($image_path . $leader->image);
                  }
                  //Delete the large image too
                  if (file_exists($large_image_path . $leader->image)) {
                      unlink($large_image_path . $leader->image);
                  }
              }
                Leader::where(['id' => $id])->delete();
                return redirect()->back()->with('flash_message_success', 'Leader Deleted Successfully');
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }
}
