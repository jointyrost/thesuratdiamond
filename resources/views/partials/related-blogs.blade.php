<div class="slick-single-layout">
    <div class="content-blog">
        <div class="inner">
            <div class="axil-gallery-activation axil-slick-arrow arrow-between-side">
                <!-- Start Single Thumb  -->
                <div class="thumbnail">
                    <a href="{{ url('blogs/' . $blog->id) }}"">
                        <img src="{{asset('storage/'.$blog->image1)}}" alt="Blog Images">
                    </a>
                </div>
                <!-- End Single Thumb  -->
            </div>
            <div class="content">
                <h5 class="title"><a href="{{ url('blogs/' . $blog->id) }}"">{{$blog->title}}</a></h5>
                <div class="axil-post-meta">
                    <div class="post-author-avatar">
                        <img src="{{asset('user/assets/images/aman.png')}}" alt="Author Images">
                    </div>
                    <div class="post-meta-content">
                        <h6 class="author-title">
                            <a href="{{ url('blogs/' . $blog->id) }}"">{{$blog->name}}</a>
                        </h6>
                        <ul class="post-meta-list">
                            <li>{{$blog->created_at->format('j M Y')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>