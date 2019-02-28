<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function index(){
        return view('posts.index');
    }
    
    public function show($id){
        return view('posts.show');
    }
    public function create(){

        return view('posts.create');
    }
    public function store(){
        
        $this->validate(request(), [
            'title' => 'required', 
            'myBody' => 'required'
        ]);
        \App\Post::create([
            'title' => request('title'),
            'body' => request('postBody')
        ]); 


        return redirect('/');
        //return view('posts.create');
    }

}
