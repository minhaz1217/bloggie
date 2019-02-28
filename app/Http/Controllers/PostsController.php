<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function index(){
        $posts = \App\Post::all();
        return view('posts.index',compact('posts'));
    }
    
    public function show(\App\Post $post){
        //$post = \App\Post::find($post);
        return view('posts.show',compact('post'));
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
