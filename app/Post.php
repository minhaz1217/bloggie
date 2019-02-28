<?php

namespace App;

class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function addComment($body){
        // 3rd way

        $this->comments()->create(['body'=>$body]);
        
        // 4th way
        //$this->comments()->create(compact('body'));
        
        // 2nd way
        // \App\Comment::create([
        //     'body'=>$body,
        //     'post_id' =>$this->id
        // ]);
    }
}
