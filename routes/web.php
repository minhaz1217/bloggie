<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $tasks = DB::table('tasks')->get();
    //dd($tasks);
    $name = "world";
    //return $tasks;
    return view('welcome', compact('name', 'tasks'));

    
    // 3rd option
    // $name = "World 2";
    // return view('welcome', compact('name'));

    // return view('welcome',[
    //     'name'=> "World"
    // ]);
/*
    return view('welcome')=>with('name', 'world');
    $name = "World"
    return view('welcome').compact('name');
    */
});

Route::get('/tasks', function(){
    $tasks = DB::table('tasks')->get();
    //dd($tasks);
    $title = "Show Tasks";
    //return $tasks;
    return view('tasks.index', compact('title', 'tasks'));
});

Route::get('/tasks/show/{task}', function($id){
    $task = DB::table('tasks')->find($id);
    $title = "Show Task";
    return view('tasks.show', compact('title', 'task'));
});
