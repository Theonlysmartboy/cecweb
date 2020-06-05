<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Branch;
use App\Leader;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('adminSession')) {
        $title = "CEC | Churches";
        $churches = Branch::get();
        return view('branch.index')->with(compact('title','churches'));
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
            $title = "CEC | Churches | Add" ;
            //Leaders drop down start
            $leaders = Leader::get();
            $leaders_dropdown = "<option selected>Select</option>";
            foreach ($leaders as $leader) {
                $leaders_dropdown .= "<option class='bg-ready' value='" . $leader->id . "'>" . $leader->name . "</option>";
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
        //
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
