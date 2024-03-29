<header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <!-- <a class="text-muted" href="#">Subscribe</a> -->
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="/">Bloggie</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <!-- <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                            viewBox="0 0 24 24" focusable="false">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a> -->
                @if(Auth::check())
                <h2 class="p-2 text-muted">{{Auth::user()->name}}</h2>

                <a class="btn btn-sm btn-outline-secondary" href="/posts/create" type='submit'>Create Post</a>
                <a class="btn btn-sm btn-outline-secondary" href="/logout" type='submit'>Logout</a>
                @else
                
                <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
                <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
                    @endif
                </div>
            </div>
        </header>
