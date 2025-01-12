<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index(){
        return view('auth.login');
    }
    public function store(Request $request){
        
        $request->validate([
            'email'=>'required|email:rfc,dns',
            'password'=>'required'
        ]);
        if(!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('status','Invalid login details');
        };
        return redirect()->route('home');
    }
}
