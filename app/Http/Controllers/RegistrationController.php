<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Welcome;
class RegistrationController extends Controller
{
    //
    public function create(){
        return view('registration.create');
    }
    public function store(){
        //dd("HI");
        //validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);


        //create and save the user
        $user = \App\User::create(request(['name', 'email', 'password']));
        //redirec

        auth()->login($user);
        \Mail::to($user)->send(new Welcome($user));
        session()->flash('message', 'Welcome to BLOGGIE');
        return redirect()->home();
    }

}
