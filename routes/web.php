<?php
Route::get('/', 'PostsController@index')->name('home');    
Route::get('/home', 'PostsController@index');    
Route::get('/posts/create', 'PostsController@create');    
Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');    
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');    
Route::post('/register', 'RegistrationController@store');    
Route::get("/login", "SessionController@create")->name('login');
Route::post("/login", "SessionController@store");
Route::get("/logout", "SessionController@destroy");
Route::get("/posts/tag/{tag}", "TagsController@index");
?>
