<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('adminSession')) {
            $title = "CEC | Categories";
            $categories = Category::get();
            return view('category.index')->with(compact('title','categories'));
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
            $title = "CEC | Categories | Add";
            return view('category.create')->with(compact('title'));
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
            $category = new Category;
            $category->title = $data['c_title'];
            $category->description = $data['c_desc'];
            $category->save();
            return redirect('categories/')->with('flash_message_success', 'Category successfuly added');
        }else{
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
        if(Session::has('adminSession')){
            $categoryDetails = Category::where(['id'=>$id])->first();
            $title = $categoryDetails->title;
            return view('category.edit')->with(compact('categoryDetails', 'title'));
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
        Category::where(['id' => $id])->update(['title' => $data['c_title'], 'description' => $data['c_desc']]);
        return redirect('categories/')->with('flash_message_success', 'Category details updated Successfully');
    }else{
        return redirect()->back()->with('flash_message_error', 'Access denied!');
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
