@extends('layouts.master')
<div class="col-md-8 blog-main">
    @section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>

        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">Mark</a></p>

        <p>{{ $post->body }}</p>
        <hr>
    </div><!-- /.blog-post -->

    @endsection
</div>
