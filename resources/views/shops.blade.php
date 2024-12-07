

@extends('layouts.main')
@push('styles')
    <style>
        .category-select .reset-but {
    color: var(--color-dark);
    width: auto;
    margin: 10px;
    /* padding-right: 43px; */
    background: rgba(0, 0, 0, 0);
    font-family: var(--font-primary);
    font-weight: 500;
    font-size: var(--font-size-b1);
    border: 2px solid var(--color-light);
}
    </style>
@endpush
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
                                <li class="axil-breadcrumb-item active" aria-current="page">My Account</li>
                            </ul>
                            <h1 class="title">Explore All Products</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="{{ url('user/assets/images/product/categories/jewelry-' . $productId . '.png') }}" alt="Image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Shop Area  -->
        <div class="axil-shop-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="axil-shop-top">
                            <form id="filterForm" method="GET" action="{{ route('shops.category', ['productId' => $productId]) }}">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="category-select">
                                            <!-- Start Single Select for Gender -->
                                            <select class="single-select" name="gender" onchange="submitForm()">
                                                <option value="">Gender</option>
                                                <option value="men" {{ isset($filters['gender']) && $filters['gender'] === 'men' ? 'selected' : '' }}>Men</option>
                                                <option value="women" {{ isset($filters['gender']) && $filters['gender'] === 'women' ? 'selected' : '' }}>Women</option>
                                                <option value="kit" {{ isset($filters['gender']) && $filters['gender'] === 'kit' ? 'selected' : '' }}>Kit</option>
                                                <option value="other" {{ isset($filters['gender']) && $filters['gender'] === 'other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                            <!-- End Single Select -->
                            
                                            <!-- Start Single Select for Color -->
                                            <select class="single-select" name="jewellery_type" onchange="submitForm()">
                                                <option value="">Jewellery Type</option>
                                                <option value="diamond_jewellery" {{ isset($filters['jewellery_type']) && $filters['jewellery_type'] === 'diamond_jewellery' ? 'selected' : '' }}>Diamond Jewellery</option>
                                                <option value="gold_jewellery" {{ isset($filters['jewellery_type']) && $filters['jewellery_type'] === 'gold_jewellery' ? 'selected' : '' }}>Gold Jewellery</option>
                                                <option value="platinum_jewellery" {{ isset($filters['jewellery_type']) && $filters['jewellery_type'] === 'platinum_jewellery' ? 'selected' : '' }}>Platinum Jewellery</option>
                                                <option value="plain_jewellery_with_stones" {{ isset($filters['jewellery_type']) && $filters['jewellery_type'] === 'plain_jewellery_with_stones' ? 'selected' : '' }}>Plain Jewellery with Stones</option>
                                                <option value="jewellery_with_gemstones" {{ isset($filters['jewellery_type']) && $filters['jewellery_type'] === 'jewellery_with_gemstones' ? 'selected' : '' }}>Jewellery with Gemstones</option>
                                            </select>
                                            <!-- End Single Select -->
                            
                                            <!-- Start Single Select for Price Range -->
                                            <select class="single-select" name="price_range" onchange="submitForm()">
                                                <option value="">Price Range</option>
                                                <option value="0-100" {{ isset($filters['price_range']) && $filters['price_range'] === '0-100' ? 'selected' : '' }}>0 - 100</option>
                                                <option value="100-500" {{ isset($filters['price_range']) && $filters['price_range'] === '100-500' ? 'selected' : '' }}>100 - 500</option>
                                                <option value="500-1000" {{ isset($filters['price_range']) && $filters['price_range'] === '500-1000' ? 'selected' : '' }}>500 - 1000</option>
                                                <option value="1000-1500" {{ isset($filters['price_range']) && $filters['price_range'] === '1000-1500' ? 'selected' : '' }}>1000 - 1500</option>
                                            </select>
                                            <button type="button" onclick="clearFilters()" class="rounded reset-but">Reset Filters</button>
                                            <!-- End Single Select -->
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                            <!-- Start Single Select for Sorting -->
                                            <select class="single-select" name="sort_by" onchange="submitForm()">
                                                <option value="latest">Sort by Latest</option>
                                                <option value="name">Sort by Name</option>
                                                <option value="price">Sort by Price</option>
                                                <option value="viewed">Sort by Viewed</option>
                                            </select>
                                            <!-- End Single Select -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="{{asset('storage/'.$product->images[0]->image_path)}}" alt="Product Images">
                                </a>
                                
                                {{-- <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">{{$product->name}}</a></h5>
                                    <div class="product-price-variant">
                                        
                                        <span class="price current-price">${{$product->price}}</span>
                                        {{-- <span class="price old-price">$30</span> --}}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Product  -->
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <nav aria-label="Page navigation example ">
                            <!-- Custom pagination in your Blade file -->
                            @if ($products->hasPages())
                            <ul class="pagination pagination-lg">
                                {{-- Previous Page Link --}}
                                @if ($products->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">Previous</a>
                                    </li>
                                @endif
                            
                                {{-- Pagination Elements --}}
                                @foreach ($products->links()->elements as $element)
                                    {{-- "Three Dots" Separator --}}
                                    @if (is_string($element))
                                        <li class="page-item disabled">
                                            <span class="page-link">{{ $element }}</span>
                                        </li>
                                    @endif
                            
                                    {{-- Array Of Links --}}
                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $products->currentPage())
                                                <li class="page-item active">
                                                    <span class="page-link">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            
                                {{-- Next Page Link --}}
                                @if ($products->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">Next</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link">Next</span>
                                    </li>
                                @endif
                            </ul>
                            @endif

                          </nav>
                        {{-- <a href="#" class="axil-btn btn-bg-lighter btn-load-more">View All Products</a> --}}
                    </div>
                </div>
                
            </div>
            <!-- End .container -->
        </div>
        <!-- End Shop Area  -->
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
                                                <a href="#">
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
            @include('partials.faq')
            <!-- Start Axil Newsletter Area  -->
            <div class="my-5" class="gap">

            </div>
            @include('partials.newsletter')
            <!-- End Axil Newsletter Area  -->
    </main>

  
@endsection
@push('scripts')
<script>
    function submitForm() {
        document.getElementById('filterForm').submit();
    }
</script>
<script>
    function clearFilters() {
        const productId = @json($productId);

        console.log('hello');
        window.location.href = "{{ route('clear.filter') }}?productId=" + productId;
    }
</script>
@endpush