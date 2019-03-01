<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function __construct(){
        //$this->middleware('auth');
        $this->middleware('guest', ['except' => 'destroy']);
    }
    public function create(){
        return view('sessions.create');
    }
    public function store(){
        //dd(request(['email', 'password']));
        $user = \App\User::where(['email'=>request('email'), 'password' => request('password')])->first();
        //dd( $user );
        auth()->attempt(request(['email', 'password']));
        if(! $user){
            return back()->withErrors([
                'message' => 'Please Check your Credentials'
            ]);
        }else{
            auth()->login($user);
        }
        return redirect()->home();
    }
    public function destroy(){
        //dd("HI");
        auth()->logout();
        return redirect()->home();
    }
}
