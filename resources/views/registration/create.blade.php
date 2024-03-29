@extends('layouts.master')


@section('content')
<div class="col-md-8 blog-main">

<form method="post" action="/register">
{{ csrf_field() }}
    <div class="form-group">
        <label for="name">Full Name</label>
        <input id="name" class="form-control" type="text" name='name'>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" class="form-control" type="email" name='email'>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input id="password" class="form-control" type="password" name='password'>
    </div>
    <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input id="password_confirmation" class="form-control" type="password" name='password_confirmation'>
    </div>
    <div class="form-group">
        <input id="submit" class="form-control" type="submit" value='Submit'>
    </div>
    @include('posts.errors')
</form>
</div>
@endsection
