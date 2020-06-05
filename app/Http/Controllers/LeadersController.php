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
    public function index()
    {
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
    public function create()
    {
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
    public function store(Request $request)
    {
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
                     //echo $image_temp; die;
                     if ($image_temp->isValid()) {
                         $extension = $image_temp->getClientOriginalExtension();
                         $filename = mt_rand(000, 9999999999) . '.' . $extension;
                         $filepath = 'webimgs/pastors/' . $filename;
                         //upload the image
                         Image::make($image_temp)->resize(150, 150)->save($webimagefilepath);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
