<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Category;
use App\Post;
<<<<<<< HEAD
use Auth;
use Image;
=======
>>>>>>> 2a1f629ce824991de291c6147e2cf1033a7ba967

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('adminSession')) {
            $title = "CEC | Posts";
            $posts = Post::get();
            $categories = Category::get();
<<<<<<< HEAD
            return view('post.index')->with(compact('title','posts','categories'));
=======
            return view('posts.index')->with(compact('title','posts','categories'));
>>>>>>> 2a1f629ce824991de291c6147e2cf1033a7ba967
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
            $title = "CEC | Posts | Create" ;
            //Categories drop down start
            $categories = Category::get();
            $categories_dropdown = "<option selected>Select</option>";
            foreach ($categories as $category) {
                $categories_dropdown .= "<option class='bg-ready' value='" . $category->id . "'>" . $category->title. "</option>";
            }
//categories dropdown end
<<<<<<< HEAD
            return view('post.create')->with(compact('title','categories_dropdown'));
=======
            return view('posts.create')->with(compact('title','categories_dropdown'));
>>>>>>> 2a1f629ce824991de291c6147e2cf1033a7ba967
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
        if(Session::has('adminSession')){
            $data = $request->all();
            $post = new Post;
            $post->title = $data['p_title'];
            $post->content = $data['p_cont'];
             //check if an image has been selected
             if (!empty($data['p_image'])) {
                if ($request->hasFile('p_image')) {
                    $image_temp = $request->file('p_image');
                    if ($image_temp->isValid()) {
                        $extension = $image_temp->getClientOriginalExtension();
                        $filename = mt_rand(000, 9999999999) . '.' . $extension;
                        $filepath = public_path().'/images/webimgs/posts/small/' . $filename;
                        $large_file_path = public_path().'/images/webimgs/posts/' . $filename;
                        //upload the image
                        Image::make($image_temp)->resize(100, 100)->save($filepath);
                        Image::make($image_temp)->resize(1680,750)->save($large_file_path);
                        $post->image = $filename;
                    }
                }
            }
            $post->author = Auth::user()->name;
            $post->slug = $data['p_slug'];
            $post->category = $data['p_cat'];
            $post->save();
            return redirect('/posts')->with('flsh_message_success','Post created Successfully!');


        }else{
            return redirect()->back()->with('flash_message_error','Access denied!');
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
            $postDetails = Post::where(['id' => $id])->first();
            $title = "CEC | ".$postDetails->name ." | Edit";
            //Categories drop down start
            $categories = Category::get();
            $categories_dropdown = "<option>Select</option>";
            foreach ($categories as $category) {
                if ($category->id == $postDetails->category) {
                    $categories_dropdown .= "<option value='" . $category->id . "' selected>" . $category->title . "</option>";
                } else {
                    $categories_dropdown .= "<option value='" . $category->id . "'>" . $category->title . "</option>";
                }
            }
            //Categories dropdown end
            return view('post.edit')->with(compact('postDetails', 'title', 'categories_dropdown'));
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        if(Session::has('adminSession')){
            $data = $request->all();
            //check if user has selected a new image file
        if ($request->hasFile('p_image')) {
            // if true upload it
            $image_temp = $request->file('p_image');
            if ($image_temp->isValid()) {
                $extension = $image_temp->getClientOriginalExtension();
                $filename = rand(000, 9999999999) . '.' . $extension;
                $image_path = public_path().'/images/webimgs/posts/small/' . $filename;
                $large_image_path = public_path().'/images/webimgs/posts/' . $filename;
                //Resize and upload images
                Image::make($image_temp)->resize(100,100)->save($image_path);
                Image::make($image_temp)->resize(1680,750)->save($large_image_path);
                $post = Post::where(['id' => $id])->first();
                //Get post image paths
                $image_path = public_path().'/images/webimgs/posts/small/';
                $large_image_path = public_path().'/images/webimgs/posts/';
                //check if user had previously uploaded an image
                if($post->image !=null || $post->image!=""){
                //Delete the image if exists
                if (file_exists($image_path . $post->image)) {
                    unlink($image_path . $post->image);
                }
                //Delete the large image too
                if (file_exists($large_image_path . $post->image)) {
                    unlink($large_image_path . $post->image);
                }
            }
            }
        } else {
            $filename = $data['current_image'];
        }
        Post::where(['id' => $id])->update(['title' => $data['p_title'], 'content' => $data['p_cont'], 'image' => $filename, 
        'author' => Auth::user()->name, 'slug' => $data['p_slug'], 'category'=>$data['p_cat']]);
        return redirect('posts/')->with('flash_message_success', 'Post details updated Successfully');

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
                //get the particular post form the db
                $post = Post::where(['id' => $id])->first();
                //Get post image paths
                $image_path = public_path().'/images/webimgs/posts/small/';
                $large_image_path = public_path().'/images/webimgs/posts/';
                //check if user had previously uploaded an image
                if($post->image !=null || $post->image!=""){
                //Delete the image if exists
                if (file_exists($image_path . $post->image)) {
                    unlink($image_path . $post->image);
                }
                //Delete the large image too
                if (file_exists($large_image_path . $post->image)) {
                    unlink($large_image_path . $post->image);
                }
            }
                Post::where(['id' => $id])->delete();
                return redirect()->back()->with('flash_message_success', 'Post Deleted Successfully');
            }
        } else {
            return redirect()->back()->with('flash_message_error', 'Access denied!!');
        }
    }
}
