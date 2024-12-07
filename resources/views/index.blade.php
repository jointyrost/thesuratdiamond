@push('styles')
    <style>
        .main-slider-content-wrapper .slide {
    display: none;
    opacity: 0;
    transition: opacity 1s ease;
}
.main-slider-content-wrapper .slide.active {
    display: block;
    opacity: 1;
}

.axil-main-slider-area {
    position: relative;
    overflow: hidden;
}

.background-layer {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    transition: opacity 1s ease-in-out;
    opacity: 0;
    z-index: -1;
}

.background-layer.active {
    opacity: 1;
    z-index: 1;
}

.bg_image--slide1 {
    background-image: url('/user/assets/images/bg/bg-image-8.jpg');
}

.bg_image--slide2 {
    background-image: url('/user/assets/images/bg/bg-image-7.jpg');
}

.bg_image--slide3 {
    background-image: url('/user/assets/images/bg/bg-image-4.jpg');
}
    </style>
@endpush

@extends('layouts.main')
@section('content')
<!-- Start Slider Area -->
<div class="axil-main-slider-area main-slider-style-7" id="slider-background">
    <div class="background-layer active" id="background-layer-1"></div>
    <div class="background-layer" id="background-layer-2"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <div class="main-slider-content-wrapper">
                    <!-- Slide 1 -->
                    <div class="main-slider-content slide slide-1">
                        <span class="subtitle"><i class="fas fa-fire"></i>Hot Deal In Diamond</span>
                        <h1 class="title ts">The Surat Diamond</h1>
                        <p class="ts">Discover the perfect diamond that tells your unique story.</p>
                        <div class="shop-btn">
                            <a href="/browse-collection" class="underline-none axil-btn btn-bg-secondary right-icon">
                                Browse Collections<i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="main-slider-content slide slide-2">
                        <span class="subtitle"><i class="fas fa-fire"></i>Premimum Quality</span>
                        <h1 class="title ts">Shining Elegance</h1>
                        <p class="ts">Find a brilliant diamond to suit every moment.</p>
                        <div class="shop-btn">
                            <a href="/browse-collection" class="underline-none axil-btn btn-bg-secondary right-icon">
                                Browse Collections<i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="main-slider-content slide slide-3">
                        <span class="subtitle"><i class="fas fa-fire"></i>Best Value</span>
                        <h1 class="title ts">Brilliance Redefined</h1>
                        <p class="ts">Crafted with precision for your unique style.</p>
                        <div class="shop-btn">
                            <a href="/browse-collection" class="underline-none axil-btn btn-bg-secondary right-icon">
                                Browse Collections<i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
    
    <!-- End Slider Area -->

    <!-- Start Axil Product Poster Area  -->
    <div class="axil-poster axil-section-gap pb--0">
        <div class="container">
            <div class="row g-lg-5 g-4">
                <div class="col-lg-6">
                    <div class="single-poster">
                        <a href="/browse-collection?price_range=4000-40000">
                            <img src="user/assets/images/product/poster/poster-08.jpg" alt="eTrade promotion poster">
                            <div class="poster-content content-left">
                                <div class="inner">
                                    <h3 class="title">Premimum <br> Quality.</h3><br>
                                    <span class="sub-title ">Collections <i class="fal fa-long-arrow-right"></i></span>
                                </div>
                            </div> 
                        </a>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="single-poster">
                        <a href="/shops/3">
                            <img src="user/assets/images/product/poster/poster-09.jpg" alt="eTrade promotion poster">
                            <div class="poster-content content-left">
                                <div class="inner">
                                    <span class="sub-title">Engagemennt Rings</span>
                                    <h3 class="title">Get Exclusive <br> Rings</h3>
                                </div>
                            </div> 
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- End Axil Product Poster Area  -->

    <!-- Start New Arrivals Product Area  -->
    <div class="axil-new-arrivals-product-area fullwidth-container bg-color-white axil-section-gap pb--0">
        <div class="container ml--xxl-0">
            <div class="product-area pb--50">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i> This Week’s</span>
                    <h2 class="title">New Arrivals</h2>
                </div>
                <div class="new-arrivals-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    @if (count($latest_product) > 0)
                      @foreach ($latest_product as $latest)
                        @php
                            $price = 0;
                            if(Auth::user() && auth()->user()->userType == config('constants.USER_TYPES.WHOLESALER')){
                                    $price = $latest->product_price ;
                            } else {
                                    $price = $latest->user_price ;
                            }
                        @endphp
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-four">
                            <div class="thumbnail">
                                @if ($latest->images->count() > 0)
                                    @php
                                        $firstImage = $latest->images->first();
                                    @endphp
                                        <a href="{{ url("product-details", ['slug' => $latest->id]) }}">
                                            <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="{{ asset('storage/'.$firstImage->image_path) }}" alt="Product Images">
                                        </a>
                                @endif
                                  {{-- <div class="label-block label-right">
                                    <div class="product-badget">20% OFF</div>
                                </div>  --}}
                                  {{-- <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="#" onclick="addWishList('{{$latest->id}}')"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="#" onclick="addToCart('{{$latest->id}}','{{$price}}','ADD')">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" onclick="showProduct('{{$latest->slug}}')"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div> -  --}}
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ url("product-details", ['slug' => $latest->id]) }}">{{$latest->name}}</a></h5>
                                    <div class="product-price-variant"> 
                                        @auth
                                            @if (auth()->user()->userType == config('constants.USER_TYPES.WHOLESALER') )
                                                <span class="price old-price">${{$latest->price}}</span>   
                                                <span class="price current-price">${{ $latest->price}}</span>
                                            @else
                                                <span class="price current-price">${{$latest->price}}</span>
                                            @endif 
                                        @else   
                                            <span class="price old-price">${{$latest->price}}</span>   
                                            <span class="price current-price">${{( $latest->price )}}</span>
                                        @endauth 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      @endforeach
                    @else
                        <article class="blog blog--six mb--50 ">
                            <p class="text-center">No article found.</p>
                        </article>
                    @endif 
                </div>
            </div>
        </div>
    </div>
    <!-- End New Arrivals Product Area  -->
 
      <!-- Start Best Sellers Product Area  -->
      <div class="axil-new-arrivals-product-area fullwidth-container bg-color-white axil-section-gap pb--0">
        <div class="container ml--xxl-0">
            <div class="product-area pb--50">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i> This Month's</span>
                    <h2 class="title">Best Sellers</h2>
                </div>
                <div class="new-arrivals-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    @if (count($mostSoldJewelleryProducts) > 0)
                      @foreach ($mostSoldJewelleryProducts as $latest)
                        @php
                            $price = 0;
                            if(Auth::user() && auth()->user()->userType == config('constants.USER_TYPES.WHOLESALER')){
                                    $price = $latest->product_price ;
                            } else {
                                    $price = $latest->user_price ;
                            }
                        @endphp
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-four">
                            <div class="thumbnail">
                                @if ($latest->images->count() > 0)
                                    @php
                                        $firstImage = $latest->images->first();
                                    @endphp
                                        <a href="{{ url("product-details", ['slug' => $latest->id]) }}">
                                            <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="{{ asset('storage/'.$firstImage->image_path) }}" alt="Product Images">
                                        </a>
                                @endif
                                  {{-- <div class="label-block label-right">
                                    <div class="product-badget">20% OFF</div>
                                </div>  --}}
                                  {{-- <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="#" onclick="addWishList('{{$latest->id}}')"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="#" onclick="addToCart('{{$latest->id}}','{{$price}}','ADD')">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" onclick="showProduct('{{$latest->slug}}')"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div> -  --}}
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ url("product-details", ['slug' => $latest->id]) }}">{{$latest->name}}</a></h5>
                                    <div class="product-price-variant"> 
                                        @auth
                                            @if (auth()->user()->userType == config('constants.USER_TYPES.WHOLESALER') )
                                                <span class="price old-price">${{$latest->price}}</span>   
                                                <span class="price current-price">${{ $latest->price}}</span>
                                            @else
                                                <span class="price current-price">${{$latest->price}}</span>
                                            @endif 
                                        @else   
                                            <span class="price old-price">${{$latest->price}}</span>   
                                            <span class="price current-price">${{( $latest->price )}}</span>
                                        @endauth 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      @endforeach
                    @else
                        <article class="blog blog--six mb--50 ">
                            <p class="text-center">No article found.</p>
                        </article>
                    @endif 
                </div>
            </div>
        </div>
    </div>
    <!-- End  Best Sellers Product Area  -->

    {{-- this is ring bulder post  --}}
    <!-- Poster Countdown Area  -->
    <div style="background-color: #FCFCFC" class="your-element axil-poster-countdown ">
        <div class="container">
            <div  class="poster-countdown-wrap ">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="poster-countdown-content">
                            <div class="section-title-wrapper">
                                {{-- <span class="title-highlighter highlighter-secondary"> <i class="fal fa-diamond-alt"></i> Don’t Miss!!</span> --}}
                                <h2 class="title text-center">Create  <br> Your Dream  Ring Using Our <br> Ring Design Tool</h2>
                            </div>
                            <a style="position: relative; left:36%" href="/create-ring" class="axil-btn btn-bg-primary  mt-5">Get Now</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="poster-countdown-thumbnail">
                            <picture>
                                <source srcset="user/assets/images/gif1.webp" type="image/webp">
                                <img src="user/assets/images/gif1.gif" alt="Poster Product GIF" loading="lazy">
                            </picture>

                            {{-- <img src="user/assets/images/gif1.webp" alt="Poster Product"> --}}
                            {{-- <div class="music-singnal">
                                <div class="item-circle circle-1"></div>
                                <div class="item-circle circle-2"></div>
                                <div class="item-circle circle-3"></div>
                                <div class="item-circle circle-4"></div>
                                <div class="item-circle circle-5"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Poster Countdown Area  -->
    {{-- this is ring bulder post  --}}

    <!-- Start Categorie Area  -->
    <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary"> <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i> Categories</span>
                <h2 class="title">Browse by Category</h2>
            </div>
            <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="300" data-sal-duration="500">
                        <a class="underline-none" href="/shops/3">
                            <img class="img-fluid" src="user/assets/images/product/categories/jewelry-3.png" alt="product categorie">
                            <h6 class="cat-title">Ring</h6>
                        </a>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="categrie-product" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                            <a class="underline-none"href="/shops/1">
                                <img class="img-fluid" src="user/assets/images/product/categories/jewelry-1.png" alt="product categorie">
                                <h6 class="cat-title">Earrings</h6>
                            </a>
                        </div>
                    </div>
                 <!-- End .slick-single-layout -->
                 <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                        <a class="underline-none" href="/shops/2">
                            <img class="img-fluid" src="user/assets/images/product/categories/jewelry-2.png" alt="product categorie">
                            <h6 class=" cat-title">Pendent</h6>
                        </a>
                    </div>
                </div>

                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="700" data-sal-duration="500">
                        <a class="underline-none" href="/shops/10">
                            <img class="img-fluid" src="user/assets/images/product/categories/jewelry-10.png" alt="product categorie">
                            <h6 class="cat-title">Braclet</h6>
                        </a>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
        
                 <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="700" data-sal-duration="500">
                        <a class="underline-none" href="/shops/9">
                            <img class="img-fluid" src="user/assets/images/product/categories/jewelry-9.png" alt="product categorie">
                            <h6 class="cat-title">Bangle</h6>
                        </a>
                    </div>
                </div>
                         <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="500" data-sal-duration="500">
                        <a class="underline-none" href="/shops/5">
                            <img class="img-fluid" src="user/assets/images/product/categories/jewelry-5.png" alt="product categorie">
                            <h6 class="cat-title">Chain</h6>
                        </a>
                    </div>
                </div>
               
             

                <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="400" data-sal-duration="500">
                        <a class="underline-none" class="underline-none" href="/shops/4">
                            <img class="img-fluid" src="user/assets/images/product/categories/jewelry-4.png" alt="product categorie">
                            <h6 class="cat-title">Mangalsutra</h6>
                        </a>
                    </div>
                </div>
               
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="600" data-sal-duration="500">
                        <a class="underline-none" href="/shops/6">
                            <img class="img-fluid" src="user/assets/images/product/categories/jewelry-6.png" alt="product categorie">
                            <h6 class="cat-title">Nose Pin</h6>
                        </a>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="700" data-sal-duration="500">
                        <a class="underline-none" href="/shops/7">
                            <img class="img-fluid" src="user/assets/images/product/categories/jewelry-7.png" alt="product categorie">
                            <h6 class="cat-title">Necklace</h6>
                        </a>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                
                <div class="slick-single-layout">
                    <div class="categrie-product" data-sal="zoom-out" data-sal-delay="700" data-sal-duration="500">
                        <a class="underline-none" href="/shops/14">
                            <img class="img-fluid" src="user/assets/images/product/categories/jewelry-14.png" alt="product categorie">
                            <h6 class="cat-title">Watch</h6>
                        </a>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                
                <!-- End .slick-single-layout -->
            </div>
        </div>
    </div>
    <!-- End Categorie Area  -->

    <!-- Start Most viewed Product Area  -->
    <div class="axil-new-arrivals-product-area fullwidth-container bg-color-white axil-section-gap pb--0">
        <div class="container ml--xxl-0">
            <div class="product-area pb--50">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i> This Week’s</span>
                    <h2 class="title">Most Viewed</h2>
                </div>
                <div class="new-arrivals-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    @if (count($mostViewedProducts) > 0)
                      @foreach ($mostViewedProducts as $latest)
                        @php
                            $price = 0;
                            if(Auth::user() && auth()->user()->userType == config('constants.USER_TYPES.WHOLESALER')){
                                    $price = $latest->product_price ;
                            } else {
                                    $price = $latest->user_price ;
                            }
                        @endphp
                    <div class="slick-single-layout">
                        <div class="axil-product product-style-four">
                            <div class="thumbnail">
                                @if ($latest->images->count() > 0)
                                    @php
                                        $firstImage = $latest->images->first();
                                    @endphp
                                        <a href="{{ url("product-details", ['slug' => $latest->id]) }}">
                                            <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="{{ asset('storage/'.$firstImage->image_path) }}" alt="Product Images">
                                        </a>
                                @endif
                                  {{-- <div class="label-block label-right">
                                    <div class="product-badget">20% OFF</div>
                                </div>  --}}
                                  {{-- <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="#" onclick="addWishList('{{$latest->id}}')"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="#" onclick="addToCart('{{$latest->id}}','{{$price}}','ADD')">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" onclick="showProduct('{{$latest->slug}}')"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div> -  --}}
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="{{ url("product-details", ['slug' => $latest->id]) }}">{{$latest->name}}</a></h5>
                                    <div class="product-price-variant"> 
                                        @auth
                                            @if (auth()->user()->userType == config('constants.USER_TYPES.WHOLESALER') )
                                                <span class="price old-price">${{$latest->price}}</span>   
                                                <span class="price current-price">${{ $latest->price}}</span>
                                            @else
                                                <span class="price current-price">${{$latest->price}}</span>
                                            @endif 
                                        @else   
                                            <span class="price old-price">${{$latest->price}}</span>   
                                            <span class="price current-price">${{( $latest->price )}}</span>
                                        @endauth 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      @endforeach
                    @else
                        <article class="blog blog--six mb--50 ">
                            <p class="text-center">No article found.</p>
                        </article>
                    @endif 
                </div>
            </div>
        </div>
    </div>
    <!-- End Most viewed Product Area  -->

   
    <!-- Start Expolre Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap pb--0">
        <div class="container">
            <div class="product-area pb--80">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i> Our Products</span>
                    <h2 class="title">Explore our Products</h2>
                </div>
                <div class="row row--15"> 
                    @if (count($products) > 0)
                       @foreach ($products as $product)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="{{ url("product-details", ['slug' => $product->id]) }}">
                                        <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="{{asset('storage/'.$product->images[0]->image_path)}}" alt="Product Images">
                                    </a>
                                    <!-- <div class="label-block label-right">
                                        <div class="product-badget">15% OFF</div>
                                    </div> -->
                                    <!-- <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                 
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="{{ url("product-details", ['slug' => $product->id]) }}">{{$product->name}}</a></h5>
                                            <div class="product-price-variant"> 
                                                <span class="price current-price">${{$product->price}}</span>
                                                {{-- @auth
                                                    @if (auth()->user()->userType == config('constants.USER_TYPES.USER') )
                                                      <span class="price old-price">${{$product->price}}</span> 
                                                    @else
                                                      <span class="price old-price">${{$product->user_price}}</span>   
                                                      <span class="price current-price">${{$product->product_price}}</span>
                                                    @endif 
                                                @else   
                                                    <span class="price old-price">${{$product->user_price}}</span>   
                                                    <span class="price current-price">${{$product->product_price}}</span>
                                                @endauth  --}}
                                            </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    @endif
                </div>
                @include('partials.pagination',['items'=>$products])
            </div>
        </div>
    </div>
    <!-- End Expolre Product Area  -->
 <!-- Start Testimonila Area  -->
 <div class="axil-testimoial-area axil-section-gap bg-vista-white">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-secondary"> <i class="fal fa-quote-left"></i>Testimonials</span>
            <h2 class="title">Users Feedback</h2>
        </div>
        <!-- End .section-title -->
        <div class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
            <div class="slick-single-layout testimonial-style-one">
                <div class="review-speech">
                    <p>“I bought a diamond pendant from here, and it’s absolutely stunning! The craftsmanship and sparkle are incredible. I get compliments every time I wear it. I’ll definitely be coming back for more jewelry in the future!“</p>
                </div>
                <div class="media">
                    <div class="thumbnail">
                        <img src="user/assets/images/testimonial/image-1.png" alt="testimonial image">
                    </div>
                    <div class="media-body">
                        <span class="designation">User</span>
                        <h6 class="title">Emma R.</h6>
                    </div>
                </div>
                <!-- End .thumbnail -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout testimonial-style-one">
                <div class="review-speech">
                    <p>“I was hesitant about buying diamond jewelry online, but this experience changed my mind. The ring I ordered is even more beautiful in person, and the quality is outstanding. Delivery was fast and seamless!“</p>
                </div>
                <div class="media">
                    <div class="thumbnail">
                        <img src="user/assets/images/testimonial/image-2.png" alt="testimonial image">
                    </div>
                    <div class="media-body">
                        <span class="designation">User</span>
                        <h6 class="title">Sophia M.</h6>
                    </div>
                </div>
                <!-- End .thumbnail -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout testimonial-style-one">
                <div class="review-speech">
                    <p>“Top-notch diamonds at competitive prices. I bought a loose diamond for an engagement ring, and the clarity and cut are impressive. My local jeweler was also very impressed with the quality!“</p>
                </div>
                <div class="media">
                    <div class="thumbnail">
                        <img src="user/assets/images/testimonial/image-3.png" alt="testimonial image">
                    </div>
                    <div class="media-body">
                        <span class="designation">User</span>
                        <h6 class="title">Aman Khan</h6>
                    </div>
                </div>
                <!-- End .thumbnail -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout testimonial-style-one">
                <div class="review-speech">
                    <p>“I ordered a pair of diamond hoop earrings, and they’re perfect for adding a little sparkle to any outfit. They feel sturdy, and the diamonds shine beautifully. Couldn’t be happier!“</p>
                </div>
                <div class="media">
                    <div class="thumbnail">
                        <img src="user/assets/images/testimonial/image-2.png" alt="testimonial image">
                    </div>
                    <div class="media-body">
                        <span class="designation">User</span>
                        <h6 class="title">Sanjay M.</h6>
                    </div>
                </div>
                <!-- End .thumbnail -->
            </div>
            <!-- End .slick-single-layout -->

        </div>
    </div>
</div>
<!-- End Testimonila Area  -->

    <!-- Start Related Blog Area  -->
    <div class="related-blog-area bg-color-white pt-4 pb--60 pb_sm--40">
        <div class="container">
            <div class="section-title-wrapper mb--70 mb_sm--40 pr--110">
                <span class="title-highlighter highlighter-primary mb--10"> <i class="fal fa-bell"></i>Hot News</span>
                <h3 class="mb--25">Latest Blog</h3>
            </div>
            <div class="related-blog-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                @foreach ($blogs as $blog)
                        @include('partials.related-blogs',['blog'=>$blog])
                @endforeach
                <!-- End .slick-single-layout -->
            </div>
        </div>
    </div>
    <!-- End Related Blog Area  -->


   
    @include('partials.newsletter')
</main>
<div class="service-area">
    <div class="container">
        <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="user/assets/images/icons/service1.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Fast &amp; Secure Delivery</h6>
                        <p>Tell about your service.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="user/assets/images/icons/service2.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Ethical Practices</h6>
                        <p>Sustainable, fair and fine </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="user/assets/images/icons/service3.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Worldwide Shipping</h6>
                        <p>Shipped via insured post</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="user/assets/images/icons/service4.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Pro Quality Support</h6>
                        <p>24/7 Live support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Modal Structure -->
 <div class="modal fade quick-view-product show" id="productModal" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header p-4">
                <h5 class="modal-title" id="">Product Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
            </div>
            <div class="modal-body" id="modal-body">
                <!-- Product details will be loaded here via AJAX -->
            </div>
        </div>
    </div>
</div>

<!-- End Axil Newsletter Area  -->
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".main-slider-content-wrapper .slide");
    const backgrounds = [
        "url(/user/assets/images/bg/bg-image-7.jpg)",
        "url(/user/assets/images/bg/bg-image-72.jpg)",
        "url(/user/assets/images/bg/bg-image-103.jpg)"
    ];
    
    let currentSlide = 0;
    let currentBackgroundLayer = 1;

    function showNextSlide() {
        // Hide the current slide
        slides[currentSlide].classList.remove("active");

        // Move to the next slide
        currentSlide = (currentSlide + 1) % slides.length;

        // Show the new slide
        slides[currentSlide].classList.add("active");

        // Swap background layers for fade effect
        const layer1 = document.getElementById("background-layer-1");
        const layer2 = document.getElementById("background-layer-2");

        if (currentBackgroundLayer === 1) {
            layer2.style.backgroundImage = backgrounds[currentSlide];
            layer2.classList.add("active");
            layer1.classList.remove("active");
            currentBackgroundLayer = 2;
        } else {
            layer1.style.backgroundImage = backgrounds[currentSlide];
            layer1.classList.add("active");
            layer2.classList.remove("active");
            currentBackgroundLayer = 1;
        }
    }

    // Show the first slide and background
    slides[currentSlide].classList.add("active");
    document.getElementById("background-layer-1").style.backgroundImage = backgrounds[currentSlide];
    document.getElementById("background-layer-1").classList.add("active");

    // Set an interval to show the next slide every 2 seconds
    setInterval(showNextSlide, 5000);
});

</script>
{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll(".main-slider-content-wrapper .slide");
        const sliderBackground = document.getElementById("slider-background");
        const backgrounds = ["bg_image--slide1", "bg_image--slide2", "bg_image--slide3"];
        let currentSlide = 0;

        function showNextSlide() {
            // Hide the current slide
            slides[currentSlide].classList.remove("active");
            sliderBackground.classList.remove(backgrounds[currentSlide]);

            // Move to the next slide
            currentSlide = (currentSlide + 1) % slides.length;

            // Show the new slide and set background
            slides[currentSlide].classList.add("active");
            sliderBackground.classList.add(backgrounds[currentSlide]);
        }

        // Show the first slide and set initial background
        slides[currentSlide].classList.add("active");
        sliderBackground.classList.add(backgrounds[currentSlide]);

        // Set an interval to show the next slide every 2 seconds
        setInterval(showNextSlide, 5000);
    });
</script> --}}

@endpush