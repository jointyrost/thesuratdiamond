<footer class="axil-footer-area footer-style-2">
    <!-- Start Footer Top Area  -->
    <div class="footer-top separator-top">
        <div class="container">
            <div class="row">
                <!-- Start Single Widget  -->
                <div class="col-lg-4 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Support</h5>
                        <!-- <div class="logo mb--30">
                        <a href="index.html">
                            <img class="light-logo" src="user/assets/images/logo/logo.png" alt="Logo Images">
                        </a>
                    </div> -->
                        <div class="inner">
                            <p>Mini Hira Bazar, Varachha, <br>
                            Surat, Gujrat,<br>
                            India.
                            </p>
                            <ul class="support-list-item">
                                <li><a href="mailto:thesuratdiamond.com"><i class="fal fa-envelope-open"></i> thesuratdiamond.com</a></li>
                                <li><a href="tel:(+91)975-969-6961"><i class="fal fa-phone-alt"></i> (+91) 975-969-6961</a></li>
                                <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-4 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Account</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{route('view.cart')}}">Cart</a></li>
                                <li><a href="{{route('wishlist.index')}}">Wishlist</a></li>
                                <li><a href="{{route('browse.collection')}}">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-4 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Quick Link</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{ route('privacy-policy')}}">Privacy Policy</a></li>
                                {{-- <li><a href="#">Privacy Policy</a></li> --}}
                                <li><a href="{{ route('terms-condition')}}">Terms Of Use</a></li>
                                {{-- <li><a href="#">Terms Of Use</a></li> --}}
                                <li><a href="{{ route('faq')}}">FAQ</a></li>
                                <li><a href="{{ route('contact-us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->

            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-default separator-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="social-share">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="copyright-left d-flex flex-wrap justify-content-center">
                        <ul class="quick-link">
                            <li>© 2024. All rights reserved by <a target="_blank" href="https://thesuratdiamond.com/">TheSuratDiamond</a>.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                        <span class="card-text">Accept For</span>
                        <ul class="payment-icons-bottom quick-link">
                            <li><img src="{{ asset('user/assets/images/icons/cart/cart-1.png') }}" alt="paypal cart"></li>
                            <li><img src="{{ asset('user/assets/images/icons/cart/cart-2.png') }}" alt="paypal cart"></li>
                            <li><img src="{{ asset('user/assets/images/icons/cart/cart-5.png') }}" alt="paypal cart"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
<!-- End Footer Area  -->




<!-- Product Quick View Modal Start -->
<div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <img class="text-center modal-logo-img" src="user/assets/images/logo/logo.png"></img>
                <button  type="button" class="btn  btn-primary button-adjust" data-bs-dismiss="modal" aria-label="Close">Back to Setting</button>
            </div>
            <div class="modal-body">
                <div class="single-product-thumb">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">

                                        {{-- loop --}}
                                        <div class="thumbnail">
                                            <img src="user/assets/images/product/product-big-01.png" alt="Product Images">
                                            <div class="product-quick-view position-view">
                                                <a href="user/assets/images/product/product-big-01.png" class="popup-zoom">
                                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        {{-- loop --}}
                                        
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb small-thumb-wrapper">
                                        {{-- loop --}}
                                        <div class="small-thumb-img">
                                            <img src="user/assets/images/product/product-thumb/thumb-08.png" alt="thumb image">
                                        </div>
                                        {{-- loop --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    {{-- <div class="product-rating">
                                        <div class="star-rating">
                                            <img src="user/assets/images/icons/rate.png" alt="Rate Images">
                                        </div>
                                        <div class="review-link">
                                            <a href="#">(<span>1</span> customer reviews)</a>
                                        </div>
                                    </div> --}}
                                    <h3 class="product-title"></h3>
                                    <span class="price-amount"></span>
                                    <p class="description"></p>
                                    <hr>
                                    <h3 class="detailType">Ring Details</h3>
                                    <br>
                                    <ul class="product-meta">
                                        <li style="color: var(--color-body)" class="metalType"></li>
                                        <li style="color:  var(--color-body)" class="SettingStyle"></li>
                                        <li style="color:  var(--color-body)" class="BandTyped"></li>
                                        <li style="color: var(--color-body)" class="SettingProfile"></li>
                                        <li style="color: var(--color-body)" class="stoneType"></li>
                                        <li style="color: var(--color-body)" class="shape"></li>
                                        <li style="color: var(--color-body)" class="color"></li>
                                        <li style="color: var(--color-body)" class="stone_clarity"></li>
                                        <li style="color: var(--color-body)" class="stone_carat"></li>
                                        <li style="color: var(--color-body)" class="cut"></li>
                                        <li style="color: var(--color-body)" class="length"></li>
                                        <li style="color: var(--color-body)" class="width"></li>
                                        <li style="color: var(--color-body)" class="depth"></li>
                                        <li style="color: var(--color-body)" class="polish"></li>
                                        <li style="color: var(--color-body)" class="symmetry"></li>
                                    </ul>
                                    
                                    <div class="product-variations-wrapper">
                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                      
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="#"  onclick="addToCartTemp(this.getAttribute('data-id'))" class="axil-btn btn-bg-primary">CHOOSE THIS SETTING</a></li>
                                            {{-- <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li> --}}
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Quick View Modal End -->

<!-- Product Quick View Modal Start -->
<div class="modal fade quick-view-product" id="quick-view-modal-diamond" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <img class="text-center modal-logo-img" src="user/assets/images/logo/logo.png"></img>
                <button  type="button" class="btn  btn-primary button-adjust" data-bs-dismiss="modal" aria-label="Close">Back to Setting</button>
            </div>
            <div class="modal-body">
                <div class="single-product-thumb">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="d-flex flex-column col-md-2  mt-3">
                                    <div class="thumbnail mb-4 ">
                                        <img src="user/assets/images/4.png" class="rounded  active" onclick="selectSlide(1)" alt="Thumbnail 1">
                                    </div>
                                    {{-- <div class="thumbnail mb-4">
                                        <img src="user/assets/images/4.png" class="rounded " onclick="selectSlide(2)" alt="Thumbnail 2">
                                    </div>
                                    <div class="thumbnail mb-4">
                                        <img src="user/assets/images/4.png" class="rounded " onclick="selectSlide(3)" alt="Thumbnail 3">
                                    </div> --}}
                                    <div class="thumbnail mb-4">
                                        <img src="user/assets/images/diamond.svg" class="rounded" onclick="selectSlide(2)" alt="360 View">
                                    </div>
                                </div>
                                <div class="col-md-10  px-5 mt-3">
                                    <div id="productCarousel" class="carousel slide" >
                                        <div class="carousel-inner">
                                            <div class="single-product-thumbnail axil-product thumbnail-badge zoom-gallery">
                                                <div class="carousel-item active">
                                                    <img src="user/assets/images/4.png" class="d-block rounded w-100" alt="Product Image 1">
                                                    <div style="right: 8%" class="product-quick-view position-view">
                                                        <a href="user/assets/images/product/product-big-01.png" class="popup-zoom">
                                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                {{-- <div class="carousel-item">
                                                    <img src="user/assets/images/4.png" class="d-block rounded w-100" alt="Product Image 2">
                                                    <div style="right: 8%" c class="product-quick-view position-view">
                                                        <a href="user/assets/images/product/product-big-02.png" class="popup-zoom">
                                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                        </a>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="carousel-item">
                                                    <img src="user/assets/images/4.png" class="d-block rounded w-100" alt="Product Image 3">
                                                    <div style="right: 8%" c class="product-quick-view position-view">
                                                        <a href="user/assets/images/product/product-big-03.png" class="popup-zoom">
                                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                        </a>
                                                    </div>
                                                </div> --}}
                                                    <!-- 360° View Carousel Item -->
                                                    <div class="carousel-item">
                                                        <div class="iframe-container">
                                                            {{-- <iframe   frameborder="0"  allow="autoplay; encrypted-media" src="https://v360.diamonds/c/41ad40a8-960a-4b91-b655-3b669d905571?m=d&amp;a=TV-30153&amp;btn=0&amp;sv=0&amp;z=0" class="ng-star-inserted">
                                                            </iframe> --}}
                                                            {{-- <iframe   frameborder="0"  allow="autoplay; encrypted-media" src="https://workshop.360view.link/360viewer/360view.html?d=0108245-SA-06-19" class="ng-star-inserted">
                                                            </iframe> --}}
                                                            {{-- <iframe   frameborder="0"  allow="autoplay; encrypted-media" src="https://video.diamondasset.in/photo/Video.jsp?idv=652474605" class="ng-star-inserted">
                                                            </iframe> --}}
                                                            <iframe style="width: 100%; height: 100%; border: none;"   frameborder="0"  allow="autoplay; encrypted-media" src="https://v360.in/viewer4.0/vision360.html?d=19698&z=1&surl=https://s10.v360.in/images/company/3683/" class="ng-star-inserted">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    {{-- <div class="product-rating">
                                        <div class="star-rating">
                                            <img src="user/assets/images/icons/rate.png" alt="Rate Images">
                                        </div>
                                        <div class="review-link">
                                            <a href="#">(<span>1</span> customer reviews)</a>
                                        </div>
                                    </div> --}}
                                    <h3 class="product-title"></h3>
                                    <span class="price-amount"></span>
                                    <p class="description"></p>
                                    <hr>
                                    <h3 class="detailType">Ring Details</h3>
                                    <br>
                                    <ul class="product-meta">
                                        <li style="color: var(--color-body)" class="metalType"></li>
                                        <li style="color:  var(--color-body)" class="SettingStyle"></li>
                                        <li style="color:  var(--color-body)" class="BandTyped"></li>
                                        <li style="color: var(--color-body)" class="SettingProfile"></li>
                                        <li style="color: var(--color-body)" class="stoneType"></li>
                                        <li style="color: var(--color-body)" class="shape"></li>
                                        <li style="color: var(--color-body)" class="color"></li>
                                        <li style="color: var(--color-body)" class="stone_clarity"></li>
                                        <li style="color: var(--color-body)" class="stone_carat"></li>
                                        <li style="color: var(--color-body)" class="cut"></li>
                                        <li style="color: var(--color-body)" class="length"></li>
                                        <li style="color: var(--color-body)" class="width"></li>
                                        <li style="color: var(--color-body)" class="depth"></li>
                                        <li style="color: var(--color-body)" class="polish"></li>
                                        <li style="color: var(--color-body)" class="symmetry"></li>
                                    </ul>
                                    
                                    <div class="product-variations-wrapper">
                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                      
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="#"  onclick="finalizeCart(this.getAttribute('data-id'))" class="axil-btn btn-bg-primary">CHOOSE THIS SETTING</a></li>
                                            {{-- <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li> --}}
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Quick View Modal End -->

    {{-- modal for the oder view --}}
    <!-- Order Details Modal -->
     <!-- Order Details Modal -->
<div class="modal fade" id="orderDetailsModal" tabindex="-1" aria-labelledby="orderDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderDetailsModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Order Items will be dynamically loaded here -->
                <div id="orderItemsContainer">
                    <!-- Order information and items will be inserted here via JavaScript -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    {{-- end of order view modal --}}

    {{-- one more --}}

<!-- Header Search Modal End -->
<div class="header-search-modal" id="header-search-modal">
    <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
    <div class="header-search-wrap">
        <div class="card-header">
            <form action="#">
                <div class="input-group">
                    <input type="search" class="form-control" name="prod_search" id="prod_search" placeholder="Write Something....">
                    <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                    <span id ="prod_search_url" data-url="{{ url("product-details") }}" class="hidden"></span>
                </div>
            </form>
        </div>
        <div class="card-body">
            {{-- <div class="search-result-header">
                <h6 class="title">24 Result Found</h6>
                <a href="shop.html" class="view-all">View All</a>
            </div> --}}
            <div class="psearch-results" id="searchProductList">
                 
            </div>
        </div>
    </div>
</div>
<!-- Header Search Modal End -->
{{-- 
<div class="cart-dropdown" id="cart-dropdown">
    <div class="cart-content-wrap">
        <div class="cart-header">
            @if(count($cartDetails['cart_items']) > 0)
            <h2 class="header-title">Cart review</h2>
             @else
             <h2 class="header-title">Your cart is empty.</h2>  
            @endif 
            <button class="cart-close sidebar-close remove-wishlist"><i class="fas fa-times"></i></button>
        </div>
        <div class="cart-body">
            <ul class="cart-item-list">
                @php
                    dump($cartDetails)    ;
                @endphp
                @if(isset($cartDetails['cart_items']) && count($cartDetails['cart_items']) > 0) 
                @foreach ($cartDetails['cart_items'] as $items) 
                  
                 <li class="cart-item">
                    <div class="item-img">
                        @php
                            $imagePath = '';

                            if ($items['product_typo'] === 'ring') {
                                $imagePath = $items['setting_image'];
                            } elseif ($items['product_typo'] === 'diamond') {
                                $imagePath = $items['stone_image'];
                            } elseif ($items['product_typo'] === 'jewellery' && isset($items['jewellery_images'][0]->image_path)) {
                                $imagePath = $items['jewellery_images'][0]->image_path;
                            }
                        @endphp
                        <a href="{{ url("product-details", ['slug' => $items['slug']]) }}"><img src="{{asset('storage/'.$imagePath)}}" alt="Commodo Blown Lamp"></a>
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="item-content">
                        <div class="product-rating">
                            <span class="icon">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                            <span class="rating-number">(64)</span>
                        </div>
                        <h3 class="item-title"><a href="{{ url("product-details", ['slug' => $items['slug']]) }}">{{$items['name']}}</a></h3>
                        <div class="item-price"><span class="currency-symbol">$</span>{{$items['price']}}</div>
                        <div class="pro-qty item-quantity">
                            <input type="number" class="quantity-input" value="15">
                        </div>
                    </div>
                 </li>
                @endforeach    
                @endif 
            </ul>
        </div>
        <div class="cart-footer">
            <h3 class="cart-subtotal">
                <span class="subtotal-title">Subtotal:</span>
                <span class="subtotal-amount">{{(isset($cartDetails['total_amount']) ? '0' : '$'.$cartDetails['total_amount'] )}}</span>
            </h3>
            <div class="group-btn">
                <a href="{{route('view.cart')}}" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                <a href="{{route('checkout')}}" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
            </div>
        </div>
    </div>
</div> --}}


<!-- Modal -->
<div class="modal fade" id="shapeTypeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header py-0">
            <img style="position: relative; left: 45%; max-height: 40px;"  src="{{asset('user/assets/images/logo/logo.png')}}" alt="">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        
        </div>
    </div>
</div>