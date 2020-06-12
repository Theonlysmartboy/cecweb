<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if (Session::has('adminSession')) {
            $title = "CEC | Roles";
            $roles = Role::get();
            return view('roles.index')->with(compact('title','roles'));
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
    public function create(){
        if (Session::has('adminSession')) {
            $title = "CEC | Roles | Add";
            return view('roles.create')->with(compact('title'));
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
        if(Session::has('adminSession')){
            $data = $request->all();
            $role = new Role;
            $role->title = $data['r_title'];
            $role->description = $data['r_desc'];
            $role->save();
            return redirect('roles/')->with('flash_message_success', 'Role successfuly added');
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
    public function show($id){
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
            $roleDetails = Role::where(['id'=>$id])->first();
            $title = $roleDetails->title;
            return view('roles.edit')->with(compact('roleDetails', 'title'));
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
            Role::where(['id' => $id])->update(['title' => $data['c_title'], 'description' => $data['c_desc']]);
            return redirect('roles/')->with('flash_message_success', 'Role details updated Successfully');
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
    public function destroy($id){
        if(Session::has('adminSession')){
            if (!empty($id)) {
                Role::where(['id' => $id])->delete();
                return redirect()->back()->with('flash_message_success', 'Role Deleted Successfully');
            }
        }else{
            return redirect()->back()->with('flash_message_error', 'Access denied!');
        }
    }
}
