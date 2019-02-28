@extends('layouts.master')

@section('content')
<div class='col-sm-8'>
    <form method="POST" action="/posts">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter your post title" name='title'>
        </div>
        <div class="form-group">
            <label for="postBody">Body</label>
            <textarea id='postBody' name="postBody" class="form-control"></textarea>
        </div>
        <div class='form-group'>
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
        @include('posts.errors')
    </form>
</div>
@endsection
