<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = "Home";
      return view('welcome')->with(compact('title'));
    }
    public function about(){

    }
    public function contact(Request $request){
      
    }
}
