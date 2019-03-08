<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //   
        Schema::defaultStringLength(191);
        view()->composer('layouts.sidebar', function($view){
            $view->with('archives', \App\Post::archive());
            // $view->with('tags', \App\Tag::pluck("name")); // gets all the tags 
            $view->with('tags', \App\Tag::has("posts")->pluck("name")); // gets all the tags that has posts associated with them 
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
