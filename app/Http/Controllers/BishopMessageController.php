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
