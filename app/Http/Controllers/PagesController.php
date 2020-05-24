<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = "CEC || Home";
      return view('welcome')->with(compact('title'));
    }
    public function about(){
      $title ="CEC || About Us";
      return view('pages.about')->with(compact('title'));
    }
    public function contact(Request $request){
      $title ="CEC || Contact Us";
      if($request->isMethod('post')){
        $data = $request->all();
        dd($data);

      }
      //otherwise show the contact form
      return view('pages.contact')->with(compact('title'));
    }
}
