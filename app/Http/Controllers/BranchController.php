<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Branch;
use App\Leader;
use App\Ministry;
<<<<<<< HEAD
use Image;
=======
<<<<<<< HEAD
use Image;
=======
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function index(){
        if (Session::has('adminSession')) {
        $title = "CEC | Churches";
        $churches = Branch::get();
        $head_pastors = Leader::get();
        return view('branch.index')->with(compact('title','churches','head_pastors'));
=======
<<<<<<< HEAD
    public function index(){
        if (Session::has('adminSession')) {
        $title = "CEC | Churches";
        $churches = Branch::get();
        $head_pastors = Leader::get();
        return view('branch.index')->with(compact('title','churches','head_pastors'));
=======
    public function index()
    {
        if (Session::has('adminSession')) {
        $title = "CEC | Churches";
        $churches = Branch::get();
        return view('branch.index')->with(compact('title','churches'));
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
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
<<<<<<< HEAD
    public function create(){
=======
<<<<<<< HEAD
    public function create(){
=======
    public function create()
    {
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
        if (Session::has('adminSession')) {
            $title = "CEC | Churches | Add" ;
            //Leaders drop down start
            $leaders = Leader::get();
            $leaders_dropdown = "<option selected>Select</option>";
            foreach ($leaders as $leader) {
<<<<<<< HEAD
                $leaders_dropdown .= "<option class='bg-ready' value='" . $leader->id . "'>" . $leader->title ." ". $leader->name . "</option>";
=======
<<<<<<< HEAD
                $leaders_dropdown .= "<option class='bg-ready' value='" . $leader->id . "'>" . $leader->title ." ". $leader->name . "</option>";
=======
                $leaders_dropdown .= "<option class='bg-ready' value='" . $leader->id . "'>" . $leader->name . "</option>";
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
            }
//Leaders dropdown end
            return view('branch.create')->with(compact('title','leaders_dropdown'));
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
        //User must be admin to add
        if (Session::has('adminSession')) {
            //Get all post data
            $data = $request->all();
            $branch = new Branch;
            $branch->name = $data['ch_name'];
            //check if an image has been selected
            if (!empty($data['ch_image'])) {
                if ($request->hasFile('ch_image')) {
                    $image_temp = $request->file('ch_image');
                    //echo $image_temp; die;
                    if ($image_temp->isValid()) {
                        $extension = $image_temp->getClientOriginalExtension();
                        $filename = mt_rand(000, 9999999999) . '.' . $extension;
                        $filepath = public_path().'/images/webimgs/branches/uploads/' . $filename;
                        //upload the image
                        Image::make($image_temp)->resize(100, 100)->save($filepath);
                        $branch->image = $filename;
                    }
                }
            }
            $branch->description = $data['ch_desc'];
            $branch->email = $data['ch_mail'];
            $branch->tel = $data['ch_tel'];
            $branch->address = $data['ch_address'];
            $branch->leader = $data['ch_leader'];
            $branch->pst_message = $data['ch_pst_msg'];
            $branch->mission = $data['ch_mission'];
            $branch->vision = $data['ch_vision'];
            $branch->smedia = $data['ch_links'];
            $branch->save();
            return redirect('branches/')->with('flash_message_success', 'Church data successfuly added');
        }
        // if not return back to where it is from
        else{
            return redirect()->back()->with('flash_message_error', 'Access denied!');
        }
<<<<<<< HEAD
=======
=======
        //
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch_details = Branch::where(['id' => $id])->first();
        $head_pastor = Leader::where(['id'=>$branch_details->leader])->first();
        $title = $branch_details->name;
        $ministries = Ministry::get();
      $branches = Branch::get();
        return view('branch.show')->with(Compact('title','branch_details','branches','ministries','head_pastor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
        if(Session::has('adminSession')){
            $branchDetails = Branch::where(['id' => $id])->first();
            $title = "CEC | ".$branchDetails->name ." | Edit";
            //Leaders drop down start
            $leaders = Leader::get();
            $leaders_dropdown = "<option>Select</option>";
            foreach ($leaders as $leader) {
                if ($leader->id == $branchDetails->leader) {
                    $leaders_dropdown .= "<option value='" . $leader->id . "' selected>" . $leader->name . "</option>";
                } else {
                    $leaders_dropdown .= "<option value='" . $leader->id . "'>" . $leader->name . "</option>";
                }
            }
            //Categories dropdown end
            return view('branch.edit')->with(compact('branchDetails', 'title', 'leaders_dropdown'));
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
<<<<<<< HEAD
=======
=======
        //
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
        if(Session::has('adminSession')){
            $data = $request->all();
            //check if user has selected a new image file
        if ($request->hasFile('ch_image')) {
            // if true upload it
            $image_temp = $request->file('ch_image');
            if ($image_temp->isValid()) {
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(000, 9999999999) . '.' . $extension;
                $image_path = public_path().'/images/webimgs/branches/uploads/' . $filename;
                //Resize and upload images
                Image::make($image_temp)->resize(100,100)->save($image_path);
                $branch = Branch::where(['id' => $id])->first();
                //Get branch image paths
                $image_path = public_path().'/images/webimgs/branches/uploads/';
                //check if user had previously uploaded an image
                if($branch->image !=null || $branch->image!=""){
                //Delete the image if exists
                if (file_exists($image_path . $branch->image)) {
                    unlink($image_path . $branch->image);
                }
            }
            }
        } else {
            $filename = $data['current_image'];
        }
        Branch::where(['id' => $id])->update(['name' => $data['ch_name'], 'leader' => $data['ch_leader'],
        'description' => $data['ch_desc'], 'mission' => $data['ch_mission'], 'vision' => $data['ch_vision'],
        'email'=>$data['ch_mail'], 'tel' => $data['ch_tel'], 'image'=>$filename, 'smedia'=>$data['ch_links'],
         'address' => $data['ch_address'],'pst_message' => $data['ch_pst_msg'],]);
        return redirect('branches/')->with('flash_message_success', 'Church details updated Successfully');

        }else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
<<<<<<< HEAD
=======
=======
        //
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
        if (Session::has('adminSession')) {
            if (!empty($id)) {
                //get the particular branch form the db
                $branch = Branch::where(['id' => $id])->first();
                //Get image path
                $image_path = public_path().'/images/webimgs/branches/uploads/';
                //Delete the image if it exists
                if (file_exists($image_path . $branch->image)) {
                    unlink($image_path . $branch->image);
                }
                Branch::where(['id' => $id])->delete();
                return redirect()->back()->with('flash_message_success', 'Church details Deleted Successfully');
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
<<<<<<< HEAD
=======
=======
        //
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
    }
}
