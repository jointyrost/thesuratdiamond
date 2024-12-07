@extends('layouts.main')


@section('content')
<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">Blogs</li>
                        </ul>
                        <h1 class="title">Blog List</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="user/assets/images/logo/logo.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->
    <!-- Start Blog Area  -->
    <div class="axil-blog-area axil-section-gap">
        <div class="container">
            <div class="row row--25">
                <div class="col-lg-8 axil-post-wrapper">
                    @if ($blogs->isEmpty())
                        <p>No blogs available.</p>
                    @else
                        @foreach ($blogs as $blog)
                            <!-- Start Single Blog  -->
                        <div class="content-blog mt--60">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="/blogs/{{$blog->id}}">
                                        <img src="{{asset('storage/'.$blog->image1)}}" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></h4>
                                    <div class="axil-post-meta">
                                        <div class="post-author-avatar">
                                            <img src="user/assets/images/aman.png" alt="Author Images">
                                        </div>
                                        <div class="post-meta-content">
                                            <h6 class="author-title">
                                                <a href="/blogs/{{$blog->id}}">{{$blog->name}}</a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>{{$blog->created_at->format('j M Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>{{$blog->para1}}</p>
                                    <div class="read-more-btn">
                                        <a class="axil-btn btn-bg-primary" href="/blogs/{{$blog->id}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog  -->
                        @endforeach
                    @endif
                   
                </div>
                <div class="col-lg-4">
                    <!-- Start Sidebar Area  -->
                    <aside class="axil-sidebar-area">

                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget mt--40">
                            <h6 class="widget-title">Latest Posts</h6>


                            <!-- Start Single Post List  -->
                            @foreach ($latestPosts as $post)
                                    @include('partials.latest-posts',['post' => $post])
                                @endforeach
                            
                            <!-- End Single Post List  -->

                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="axil-single-widget mt--40">
                            <h6 class="widget-title">Recent Viewed Products</h6>
                            <ul class="product_list_widget recent-viewed-product">
                                <!-- Start Single product_list  -->
                                @foreach ($recentViewedProducts as $product)
                                    @include('partials.recent-viewed-products',['product'=>$product])
                                @endforeach
                              
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

            @include('partials.pagination',['items'=>$blogs])
            
            {{-- <div class="post-pagination">
                <nav class="navigation pagination" aria-label="Products">
                    <ul class="page-numbers">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="page-numbers" href="#">4</a></li>
                        <li><a class="page-numbers" href="#">5</a></li>
                        <li><a class="next page-numbers" href="#"><i class="fal fa-arrow-right"></i></a></li>
                    </ul>
                </nav>
            </div> --}}
            <!-- End post-pagination -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End Blog Area  -->

    <!-- Start Axil Newsletter Area  -->
@include('partials.newsletter')
    <!-- End Axil Newsletter Area  -->
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