<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leader;
use App\Ministry;
use App\Branch;

class PagesController extends Controller
{
    public function index(){
      $title = "CEC || Home";
      $ministries = Ministry::get();
      $branches = Branch::get();
      return view('welcome')->with(compact('title','branches','ministries'));
    }
    public function about(){
      $title ="CEC || About Us";
      $ministries = Ministry::get();
      $branches = Branch::get();
      return view('pages.about')->with(compact('title','branches','ministries'));
    }
    public function contact(Request $request){
      $title ="CEC || Contact Us";
      $ministries = Ministry::get();
      $branches = Branch::get();
      if($request->isMethod('post','branches','ministries')){
        $data = $request->all();
        dd($data);
      }
      //otherwise show the contact form
      return view('pages.contact')->with(compact('title','branches','ministries'));
    }
}
