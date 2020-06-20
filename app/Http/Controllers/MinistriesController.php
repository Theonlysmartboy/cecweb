<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Ministry;
use Image;
use App\Leader;
use App\Branch;

class MinistriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('adminSession')) {
            $title = "CEC | Ministries";
            $ministries = Ministry::get();
            return view('ministry.index')->with(compact('title','ministries'));
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
       if(Session::has('adminSession')){
        $title = "CEC | Ministries | Add";
        return view('ministry.create')->with(compact('title'));
       }else{
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
        $branch = new Ministry;
        $branch->name = $data['ch_name'];
        //check if an image has been selected
        if (!empty($data['ch_image'])) {
            if ($request->hasFile('ch_image')) {
                $image_temp = $request->file('ch_image');
                //echo $image_temp; die;
                if ($image_temp->isValid()) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $filename = mt_rand(000, 9999999999) . '.' . $extension;
                    $filepath = public_path().'/images/webimgs/ministries/uploads/' . $filename;
                    $largeFilePath = public_path().'/images/webimgs/ministries/uploads/large/' . $filename;
                    //upload the image
                    Image::make($image_temp)->resize(100, 100)->save($filepath);
                    Image::make($image_temp)->resize(1680, 750)->save($largeFilePath);
                    $branch->emblem = $filename;
                }
            }
        }
        $branch->description = $data['ch_pst_msg'];
        $branch->email = $data['ch_mail'];
        $branch->tel = $data['ch_tel'];
        $branch->address = $data['ch_address'];
        $branch->objectives = $data['ch_desc'];
        $branch->mission = $data['ch_mission'];
        $branch->vision = $data['ch_vision'];
        $branch->save();
        return redirect('ministries/')->with('flash_message_success', 'Ministry data successfuly added');
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
        $ministry_details = Ministry::where(['id' => $id])->first();
        $head_pastor = Leader::where(['id'=>$ministry_details->leader])->first();
        $title = $ministry_details->name;
        $ministries = Ministry::get();
        $branches = Branch::get();
        return view('ministry.show')->with(Compact('title','ministry_details','branches','ministries','head_pastor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //User must be admin to add
       if (Session::has('adminSession')) {
           $ministryDetails = Ministry::where(['id'=>$id])->first();
           $title = "CEC | ".$ministryDetails->name ." | Edit";
           return view('ministry.edit')->with(compact('ministryDetails', 'title'));
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
    public function update(Request $request, $id)
    {
        if(Session::has('adminSession')){
            $data = $request->all();
            //check if user has selected a new image file
        if ($request->hasFile('ch_image')) {
            // if true upload it
            $image_temp = $request->file('ch_image');
            if ($image_temp->isValid()) {
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(000, 9999999999) . '.' . $extension;
                $image_path = public_path().'/images/webimgs/ministries/uploads/' . $filename;
                $large_image_path = public_path().'/images/webimgs/ministries/uploads/large/' . $filename;
                //Resize and upload images
                Image::make($image_temp)->resize(100,100)->save($image_path);
                Image::make($image_temp)->resize(1680,750)->save($large_image_path);
                $ministry = Ministry::where(['id' => $id])->first();
                //Get ministry image paths
                $image_path = public_path().'/images/webimgs/ministries/uploads/';
                $large_image_path = public_path().'/images/webimgs/ministries/uploads/large/';
                //check if user had previously uploaded an image
                if($ministry->emblem !=null || $ministry->emblem!=""){
                //Delete the image if exists
                if (file_exists($image_path . $ministry->emblem)) {
                    unlink($image_path . $ministry->emblem);
                }
                //Delete the large image too
                if (file_exists($large_image_path . $ministry->emblem)) {
                    unlink($large_image_path . $ministry->emblem);
                }
            }
            }
        } else {
            $filename = $data['current_image'];
        }
        Ministry::where(['id' => $id])->update(['name' => $data['ch_name'], 'description' => $data['ch_pst_msg'],
        'mission' => $data['ch_mission'], 'vision' => $data['ch_vision'], 'email'=>$data['ch_mail'],
         'tel' => $data['ch_tel'], 'emblem'=>$filename, 'address' => $data['ch_address'],'objectives' => $data['ch_desc'],]);
        return redirect('ministries/')->with('flash_message_success', 'Ministry details updated Successfully');

        }else {
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
                //get the particular ministry form the db
                $ministry = Ministry::where(['id' => $id])->first();
                 //Get ministry image paths
                 $image_path = public_path().'/images/webimgs/ministries/uploads/';
                 $large_image_path = public_path().'/images/webimgs/ministries/uploads/large/';
                 //check if user had previously uploaded an image
                 if($ministry->emblem !=null || $ministry->emblem!=""){
                 //Delete the image if exists
                 if (file_exists($image_path . $ministry->emblem)) {
                     unlink($image_path . $ministry->emblem);
                 }
                 //Delete the large image too
                 if (file_exists($large_image_path . $ministry->emblem)) {
                     unlink($large_image_path . $ministry->emblem);
                 }
             }
                Ministry::where(['id' => $id])->delete();
                return redirect()->back()->with('flash_message_success', 'Church details Deleted Successfully');
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }
}
