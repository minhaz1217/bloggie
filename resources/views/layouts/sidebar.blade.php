<aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">About - Bloggie</h4>
                    <ul>
                    <li>Signup</li>
                    <li>Signin</li>
                    <li>Automatic mail send after signup</li>
                    <li>Create Post</li>
                    <li>Comment on each post</li>
                    <li>Comment date with moment js</li>
                    <li>Archives</li>
                    <li>Ability to view by Post date</li>
                    <li>Ability to Sort by tags</li>
                    </ul>
                </div>

                <div class="p-4">
                    <h4 class="font-italic">Archives</h4>
                    <ul class='list-unstyled mb-0'>
                    @foreach($archives as $stats)
                    <li>
                        <a href="/?month={{ $stats['month'] }}&year={{$stats['year']}}">{{ $stats['month'] . ' ' . $stats['year'] .' (' .$stats['published'] .')' }}</a>
                    </li>
                    @endforeach
                    </ul>
                    
                </div>

                <div class="p-4">
                    <h4 class="font-italic">Tags</h4>
                    <ul class='list-unstyled mb-0'>
                    @foreach($tags as $tag)
                    <li>
                        <a href="/posts/tag/{{$tag}}">{{$tag}}</a>
                    </li>
                    @endforeach
                    </ul>
                    
                </div>
                <div class="p-4">
                    <h4 class="font-italic">Where to find me</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://github.com/minhaz1217">GitHub</a></li>
                        <li><a href="https://facebook.com/minhazul.hayatkhan">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->