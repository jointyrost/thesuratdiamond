     <!-- Start Single Post List  -->
     <div class="content-blog post-list-view mb--20">
        <div class="thumbnail">
            <a href="{{ url('blogs/' . $post->id) }}">
                <img src="{{asset('storage/'.$post->image1)}}" alt="Blog Images">
            </a>
        </div>
        <div class="content">
            <h6 class="title"><a href="{{ url('blogs/' . $post->id) }}">{{$post->title}}</a></h6>
            <div class="axil-post-meta">
                <div class="post-meta-content">
                    <ul class="post-meta-list">
                        <li>{{$post->created_at->format('j M Y')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Post List  -->