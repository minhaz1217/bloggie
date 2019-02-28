@extends('layouts.master')


@section('content')

<div class="col-md-8 blog-main">
    <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
    </h3>

    <div class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with
            Bootstrap. Basic typography, images, and code are all supported.</p>
        <hr>
    </div><!-- /.blog-post -->
    <div class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with
            Bootstrap. Basic typography, images, and code are all supported.</p>
        <hr>
    </div><!-- /.blog-post -->
    <div class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with
            Bootstrap. Basic typography, images, and code are all supported.</p>
        <hr>
    </div><!-- /.blog-post -->

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
    </nav>

</div><!-- /.blog-main -->

@endsection
