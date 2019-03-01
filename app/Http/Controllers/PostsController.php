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
        //$posts = \App\Post::orderBy('created_at', 'desc')->get();
        $posts = \App\Post::latest()
            ->filter(request(['month', 'year']))
            ->get();


        // if($month = request('month')){
        //         $posts->whereMonth('created_at', \Carbon\Carbon::parse($month)->month);
        // }
        // if($year = request('year')){
        //     $posts->whereYear('created_at', $year);
        // }
        // $posts = $posts->get();



        $archives = \App\Post::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
       
        //dd($archives);
        
        return view('posts.index',compact('posts', 'archives'));
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
