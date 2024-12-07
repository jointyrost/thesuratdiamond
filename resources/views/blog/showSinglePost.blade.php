@extends('layouts.main')


@section('content')

<main class="main-wrapper">
    <!-- Start Blog Area  -->
    <div class="axil-blog-area axil-section-gap">
        <div class="axil-single-post post-formate post-standard">
            <div class="container">
                <div class="content-block">
                    <div class="inner">
                        <div class="post-thumbnail">
                            <img src="{{asset('storage/'.$blog->image1)}}" alt="blog Images">
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                </div>
                <!-- End .content-blog -->
            </div>
        </div>
        <!-- End .single-post -->
        <div class="post-single-wrapper position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky sticky-top">
                                <div class="post-details__social-share">
                                    <span class="share-on-text">Share on:</span>
                                    <div class="social-share">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.instagram.com/?url={{ urlencode($url) }}" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="https://twitter.com/share?url={{ urlencode($url) }}&text={{ urlencode($blog->title) }}" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($url) }}" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://discord.com/share?url={{ urlencode($url) }}" target="_blank">
                                            <i class="fab fa-discord"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-7 axil-post-wrapper">
                        <div class="post-heading">
                            <h2 class="title">{{$blog->title}}</h2>
                            <div class="axil-post-meta">
                                <div class="post-author-avatar">
                                    <img src="{{asset("user/assets/images/aman.png")}}" alt="Author Images">
                                </div>
                                <div class="post-meta-content">
                                    <h6 class="author-title">
                                        <a href="blogs/{{$blog->id}}">{{$blog->name}}</a>
                                    </h6>
                                    <ul class="post-meta-list">
                                        <li>{{$blog->created_at->format('j M Y')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>{!! $blog->para1 !!}</p>

                        {{-- <p> Whether you’re kicking off a new campaign or looking to revamp your strategy, the lessons you’ll learn will be universal to all small business email marketing.</p>

                        <p> MailChimp is an email marketing service provider founded in 2001. It has 9 million users that collectively send over 15 billion emails through the service each month.</p>

                        <p> Email is a crucial channel in any marketing mix, and never has this been truer than for today’s entrepreneur. Curious what to say? How to say it? How often to hit “send”? Each bite-sized lesson delivers core concepts, guiding
                            questions, and tactical how-to resources.</p>

                        <p> Whether you’re kicking off a new campaign or looking to revamp your strategy, the lessons you’ll learn will be universal to all small business email marketing.</p> --}}

                        <div class="content-blog format-quote mt--10 mb--50 mb_sm--30">
                            <div class="inner">
                                <div class="content">
                                    <blockquote>
                                        <p>“{{$blog->comment}}.”</p>
                                    </blockquote>
                                    <div class="axil-post-meta">
                                        <div class="post-author-avatar">
                                            <img src="{{asset("user/assets/images/aman.png")}}" alt="Author Images">
                                        </div>
                                        <div class="post-meta-content">
                                            <h6 class="author-title">
                                                <a href="#">{{$blog->name}}</a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>{{$blog->created_at->format('j M Y')}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3>{{$blog->heading}}</h3>
                        <p>{!! $blog->para2 !!}</p>

                        <div class="post-details wp-block-columns alignwide has-2-columns">
                            <div class="wp-block-column">
                                <figure class="wp-block-image is-resized">
                                    <img class="img-fluid" src="{{asset('storage/'.$blog->image1)}}" alt="blog image">
                                </figure>

                            </div>
                            <div class="wp-block-column">
                                <figure class="wp-block-image is-resized">
                                    <img class="img-fluid" src="{{asset('storage/'.$blog->image2)}}" alt="blog image">
                                </figure>
                            </div>
                        </div>

                        <p>{!! $blog->para3 !!}</p>

                        {{-- this is start of review section --}}
                        <hr class="saprator">

                        
                        <div class="reviews-wrapper pt--20">
                            <h4 class="mb--60">Reviews</h4>
                            <div class="row">
                                <div class="col-lg-12 mb--40">
                                    <div class="axil-comment-area pro-desc-commnet-area">
                                        <h5 class="title">{{ count($reviews) }} Review for this product</h5>
                                        <ul class="comment-list">
                                            @foreach ($reviews as $review)
                                                @include('partials.show-reviews',['review'=>$review])
                                            @endforeach
                                            <!-- Start Single Comment  -->
                                            
                                            <!-- End Single Comment  -->

                                            

                                            
                                        </ul>
                                    </div>
                                    <!-- End .axil-commnet-area -->
                                </div>
                                <!-- End .col -->
                                <div class="col-lg-12 mb--40">
                                    <!-- Start Comment Respond  -->
                                    @include('partials.review-form',['product_id'=>$blog->id,'product_type'=>'blog'])
                                    
                                    <!-- End Comment Respond  -->
                                </div>
                                <!-- End .col -->
                            </div>
                        </div>
                        
                        
                        <!-- End Comment Respond  -->
                    </div>

                    <div class="col-lg-4">
                        <!-- Start Sidebar Area  -->
                        <aside class="axil-sidebar-area">

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40">
                                <h6 class="widget-title">Latest Posts</h6>

                                @foreach ($latestPosts as $post)
                                    @include('partials.latest-posts',['post' => $post])
                                @endforeach

                                


                            </div>
                            <!-- End Single Widget  -->
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40">
                                <h6 class="widget-title">Recent Viewed Products</h6>
                                <ul class="product_list_widget recent-viewed-product">
                                    <!-- Start Single product_list  -->
                                                             <!-- Start Single product_list  -->
                                @foreach ($recentViewedProducts as $product)
                                    @include('partials.recent-viewed-products',['product'=>$product])
                                @endforeach
                          
                            <!-- End Single product_list  -->
                                    <!-- End Single product_list  -->
                                </ul>

                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            {{-- <div class="axil-single-widget mt--40 widget_search">
                                <h6 class="widget-title">Search</h6>
                                <form class="blog-search" action="#">
                                    <button class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" placeholder="Search">
                                </form>
                            </div> --}}
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            {{-- <div class="axil-single-widget mt--40 widget_archive">
                                <h6 class="widget-title">Archives List</h6>
                                <ul>
                                    <li><a href="#">January 2020</a></li>
                                    <li><a href="#">February 2020</a></li>
                                    <li><a href="#">March 2020</a></li>
                                    <li><a href="#">April 2020</a></li>
                                </ul>
                            </div> --}}
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            {{-- <div class="axil-single-widget mt--40 widget_archive_dropdown">
                                <h6 class="widget-title">Archives Dropdown</h6>
                                <select>
                                    <option>Select Month</option>
                                    <option>April 2020 (4)</option>
                                    <option>May 2020 (4)</option>
                                    <option>June 2020 (4)</option>
                                    <option>July 2020 (4)</option>
                                </select>
                            </div> --}}
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_tag_cloud">
                                <h6 class="widget-title">Tags</h6>
                                <div class="tagcloud">
                                    <a href="blogs?category=ring">ring</a>
                                    <a href="blogs?category=diamond">Diamond</a>
                                    <a href="blogs?category=braclet">Braclet</a>
                                    <a href="blogs?category=chain">Chain</a>
                                    <a href="blogs?category=paindent">Paindent</a>
                                    <a href="blogs?category=watch">watch</a>
                                    <a href="blogs?category=gold">gold</a>
                                    <a href="blogs?category=color">color</a>
                                </div>
                            </div>
                            <!-- End Single Widget  -->

                        </aside>
                        <!-- End Sidebar Area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area  -->

    

    
@include('partials.faq')
<!-- Start Axil Newsletter Area  -->
<div class="my-5" class="gap">

<!-- End Related Blog Area  -->
<!-- End Axil Newsletter Area  -->

<!-- Start Related Blog Area  -->
<div class="related-blog-area bg-color-white pb--60 pb_sm--40">
    <div class="container">
        <div class="section-title-wrapper mb--70 mb_sm--40 pr--110">
            <span class="title-highlighter highlighter-primary mb--10"> <i class="fal fa-bell"></i>Hot News</span>
            <h3 class="mb--25">Related Blog</h3>
        </div>
        <div class="related-blog-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">

            @foreach ($relatedBlogs as $blog)
                    @include('partials.related-blogs',['blog'=>$blog])
            @endforeach
       
            <!-- End .slick-single-layout -->
            
            
        </div>
    </div>
</div>
<!-- End Related Blog Area  -->
<!-- Start Axil Newsletter Area  -->
@include('partials.newsletter')
</main>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        $('#newsletter-submit').on('click', function (e) {
            e.preventDefault();
            
            // Get the email value
            var email = $('#newsletter-email').val();
    
            $.ajax({
                url: "{{ route('newsletter.subscribe') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    email: email
                },
                success: function (response) {
                    toastr.success(response.success);
                    $('#newsletter-email').val(''); // Clear input after success
                },
                error: function (xhr) {
                    if (xhr.status === 422) { // Validation error
                        var errors = xhr.responseJSON.errors;
                        if (errors.email) {
                            toastr.error(errors.email[0]);
                        }
                    } else {
                        toastr.error("An error occurred. Please try again.");
                    }
                }
            });
        });
    });
    </script>
@endpush