@extends('layouts.master')
@section('content')
<div class="col-md-8 blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        @if(count($post->tags))
        <ul>
            @foreach($post->tags as $tag)
            <li><a href="/posts/tag/{{$tag->name}}">{{$tag->name}}</a> </li>
            @endforeach
        </ul>
        @endif
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">Mark</a></p>

        <p>{{ $post->body }}</p>
        <hr>
        <div class='comments'>
            <ul class="list-group">
                @foreach($post->comments as $comment)
                <li class='list-group-item'>
                    <strong>
                        {{ $comment->created_at->diffForHumans() }} by {{ $comment->user->name  }}
                    </strong>
                    {{$comment->body}} </li>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{$post-> id}}/comments">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                    @include('posts.errors')
                </form>
            </div>
        </div>

    </div><!-- /.blog-post -->
</div>

@endsection
