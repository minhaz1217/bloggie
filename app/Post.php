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
    public function scopeFilter($query, $filters){
        //dd($filters['year']);
        if(isset($filters['month'])){
            $month = $filters['month'];
            $query->whereMonth('created_at', \Carbon\Carbon::parse($month)->month);
        }
        if(isset($filters['year'])){
            $year = $filters['year'];
            $query->whereYear('created_at', $year);
        }
        //return $query;
    }
    public static function archive(){
        return static::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
       
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
