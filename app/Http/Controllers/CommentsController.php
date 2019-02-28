<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //

    public function store(\App\Post $post){

        $post->addComment(request('body'));
        // \App\Comment::create([
        //     'body' => request('body'),
        //     'post_id' => $post->id
        // ]);
        return back();
    }
}
