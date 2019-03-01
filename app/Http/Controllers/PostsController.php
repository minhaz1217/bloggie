<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index(){
        //$posts = \App\Post::latest()->get();
        $posts = \App\Post::orderBy('created_at', 'desc')->get();
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
            'postBody' => 'required'
        ]);
        \App\Post::create([
            'title' => request('title'),
            'body' => request('postBody'),
            'user_id' => auth()->user()->id
        ]); 


        return redirect('/');
        //return view('posts.create');
    }

}
