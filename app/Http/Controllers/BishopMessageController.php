<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ministry;
use App\Branch;
use App\BishopMessage;
use Image;
use Session;

class BishopMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('adminSession')) {
            $title = "CEC | Presiding Bishops";
            $messages = BishopMessage::get();
            return view('bishop.index')->with(compact('title','messages'));
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
            $title = "CEC | Messages | Add" ;
            return view('bishop.create')->with(compact('title'));
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
        //check if the user is admin
        if (Session::has('adminSession')){
            //Get all post data
            $data = $request->all();
            $message = new BishopMessage;
            $message->title = $data['m_title'];
            $message->name = $data['m_name'];
            //check if an image has been selected
            if (!empty($data['m_image'])) {
                if ($request->hasFile('m_image')) {
                    $image_temp = $request->file('m_image');
                    //echo $image_temp; die;
                    if ($image_temp->isValid()) {
                        $extension = $image_temp->getClientOriginalExtension();
                        $filename = mt_rand(000, 9999999999) . '.' . $extension;
                        $small_filepath = public_path().'/images/webimgs/pastors/uploads/small/' . $filename;
                        $large_filepath = public_path().'/images/webimgs/pastors/uploads/' . $filename;
                        //upload the image
                        Image::make($image_temp)->resize(100, 100)->save($small_filepath);
                        Image::make($image_temp)->resize(5184,3456)->save($large_filepath);
                        $message->avatar = $filename;
                    }
                }
            }
            $message->text_message = $data['t_message'];
            $message->video_message = $data['m_media'];
            $message->save();
            return redirect()->back()->with('flash_message_success', 'leader successfuly added');
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
        $title = "CEC || Home";
      $ministries = Ministry::get();
      $branches = Branch::get();
      $message = BishopMessage::where(['id'=>$id])->first();
      return view('bishop.show')->with(compact('title','branches','ministries', 'message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //check if the user is admin
        if (Session::has('adminSession')){
            $title = "CEC | Edit Message Details";
            //Get the current Bishop's details
            $message_data = BishopMessage::where(['id' => $id])->first();
            return view('bishop.edit')->with(compact('title','message_data'));
        }else{
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
            //upload image
            if ($request->hasFile('m_image')) {
                $image_temp = $request->file('m_image');
                if ($image_temp->isValid()) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $filename = rand(000, 9999999999) . '.' . $extension;
                    $small_image_path = public_path().'/images/webimgs/pastors/uploads/small/' . $filename;
                    $large_image_path = public_path().'/images/webimgs/pastors/uploads/' . $filename;
                    //Resize and upload images
                    Image::make($image_temp)->resize(100,100)->save($small_image_path);
                    Image::make($image_temp)->resize(5184,3456)->save($large_image_path);
                    $message = BishopMessage::where(['id' => $id])->first();
                    //Get message image paths
                    $image_path = public_path().'/images/webimgs/pastors/uploads/small/';
                    $large_image_path = public_path().'/images/webimgs/pastors/uploads/';
                      //check if user had previously uploaded an image
                      if($message->image !=null || $message->image!=""){
                        //Delete the image if exists
                        if (file_exists($image_path . $message->image)) {
                            unlink($image_path . $message->image);
                        }
                        //Delete the large image too
                        if (file_exists($large_image_path . $message->image)) {
                            unlink($large_image_path . $message->image);
                        }
                    }
                }
            } else {
                $filename = $data['current_image'];
            }
            BishopMessage::where(['id' => $id])->update(['title' => $data['m_title'], 'name' => $data['m_name'],
                'avatar' => $filename, 'text_message' => $data['t_message'],'video_message' => $data['m_media'],]);
                return redirect('bishop/message/')->with('flash_message_success', 'Message details updated Successfully');
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
        //
    }
}
