<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
    }
    public function create(){
        $title = "CEC | Admin Login";
        return view('admin.login')->with(compact('title'));
    }
    public function login(Request $request){
        //validate form data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        //get all submitted data
        $email = $request ->email;
        $password = $request ->password;
        $remember = $request->remember;
        //attempt login
       if( Auth::guard('admin')->attempt(['email' => $email, 'password' => $password, 'title' => '1'], $remember)){
            //if successfull redirect to the intended location
            return redirect()->intended(route('admin.dashboard'));
       }
            //otherwise show error message and take back to login for another attempt
            return redirect()->back()->with('flash_message_error', 'Access denied! Login failed');
    }
}
