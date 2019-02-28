<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'password' => 'required'
        ]);


        //create and save the user
        $user = \App\User::create(request(['name', 'email', 'password']));
        //redirec

        auth()->login($user);
        return redirect()->home();
    }

}
