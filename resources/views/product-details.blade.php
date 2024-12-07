@push('styles')
<style>
.table-custom {
    border-collapse: separate;
    border-spacing: 0;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
  }

  .table-custom th, .table-custom td {
    padding: 12px;
    border: 1px solid #ddd;
  }

  .table-custom th {
    background-color: #f9f9f9;
    font-weight: 600;
  }

  .table-custom tr:last-child td {
    border-bottom: none;
  }

  .table-custom td:last-child {
    font-weight: 600;
  }

  .table-custom .text-success {
    color: #28a745;
  }

  .table-custom .grand-total {
    font-size: 1.2em;
    font-weight: bold;
  }
</style>
@endpush
@extends('layouts.main')


@section('content')

<!-- Start Slider Area -->
<div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
    <div class="single-product-thumb mb--40">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb--40">
                    <div class="row">
                        <div class="col-lg-10 order-lg-2">
                            <div class="single-product-thumbnail-wrap zoom-gallery">
                                <div class="single-product-thumbnail product-large-thumbnail-3 axil-product">
                                    @foreach ($products->images as $img)
                                    <div class="thumbnail">
                                        <a href="{{asset('storage/'.$img->image_path)}}" class="popup-zoom">
                                            <img src="{{asset('storage/'.$img->image_path)}}" alt="Product Images">
                                        </a>
                                    </div>
                                    @endforeach
                                    
                                    
 
                                </div>
                               
                                @foreach ($products->images as $img)
                                <div class="product-quick-view position-view">
                                    <a href="{{asset('storage/'.$img->image_path)}}" class="popup-zoom">
                                        <i class="far fa-search-plus"></i>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-2 order-lg-1">
                            <div class="product-small-thumb-3 small-thumb-wrapper">
                                @foreach ($products->images as $img)
                                <div class="small-thumb-img">
                                    <img src="{{asset('storage/'.$img->image_path)}}" alt="thumb image">
                                </div>
                                @endforeach
                                
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb--40">
                    <div class="single-product-content">
                        <div class="inner">
                            <h2 class="product-title">{{$products->name}}</h2>
                            <span class="price-amount">$ {{$products->price}}</span>
                            {{-- <div class="product-rating">
                                <div class="star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                               
                            </div> --}}
                          
                            <p class="description">{{$products->description}}</p>

                            <div class="product-variations-wrapper">

                                <h2 class="title">Product Details :</h2>
                                <div class="product-variation"> 
                                    <div class="row" style="border-bottom: 2px solid #f6f7fb;">
                                        <div class="col-6 form-group">
                                            <h6 class="title">Gold Purity: <span class="title-value">{{$products->gold_purity}}</span></h6>
                                        </div>
                                        <div class="col-12 form-group">
                                            <h6 class="title">Metal : <span class="title-value">{{$products->metal}}</span></h6>
                                        </div>
                                        <div class="col-12 form-group">
                                            <h6 class="title">Materail Color: <span class="title-value">{{$products->material_color}}</span></h6>
                                        </div> 
                                        <div class="col-12 form-group">
                                            <h6 class="title">Diamond Carat: <span class="title-value">{{$products->diamond_weight}}</span></h6>
                                        </div> 
                                        <div class="col-12 form-group">
                                            <h6 class="title">Diamond Shape: <span class="title-value">{{$products->diamond_shape}}</span></h6>
                                        </div> 
                                        
                                    </div>
                                    {{-- <h6 class="title">Colors:</h6>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <!-- End Product Variation  -->

                                <!-- Start Product Variation  -->
                                {{-- <div class="product-variation product-size-variation">
                                    <h6 class="title">Size:</h6>
                                    <ul class="range-variant">
                                        <li>xs</li>
                                        <li>s</li>
                                        <li>m</li>
                                        <li>l</li>
                                        <li>xl</li>
                                    </ul>
                                </div> --}}
                                <!-- End Product Variation  -->

                            {{-- </div> --}}
                            <div class="estimated-delivery d-flex justify-content-left align-items-center pb-4">
                                <div class="w-auto px-3">
                                    <h3 style="margin-bottom: 0">Estimated Delivery:</h3>
                                    <p class="align-self-center estimated-date"></p> <!-- This is where the date will appear -->
                                </div>
                                <div class="flex-grow-1 me-3">
                                    <p id="delivery-button" class="delivery-button" style="cursor: pointer; color: rgb(0, 0, 0);">Click to Check Delivery Date</p>
                                </div>
                            </div>

                            <!-- Start Product Action Wrapper  -->
                            <div class="product-action-wrapper d-flex-center">
                                <td class="product-quantity" data-title="Qty">
                                    <div class="pro-qty">
                                        <span class="product-dec qtybtn" >-</span>
                                        <input type="text" name="quantity_qty" id="quantity_qty" class="get-cart-field" value="1" min="1">
                                        <span class="product-inc qtybtn" >+</span>
                                    </div>
                                </td>
                              
                                <!-- End Quentity Action  -->
                                @php
                                    $price = 0;
                                    if(Auth::user() && auth()->user()->userType == config('constants.USER_TYPES.WHOLESALER')){
                                            $price = $products->product_price ;
                                    } else {
                                            $price = $products->user_price ;
                                    }
                                @endphp
                                <!-- Start Product Action  -->
                                <ul class="product-action d-flex-center mb--0">
                                    <li class="add-to-cart"><a href="#" class="axil-btn btn-bg-primary "  onclick="addToCart('{{$products->id}}','{{$products->price}}','ADD')">Add to Cart</a></li>
                                    <li class="wishlist"><a href="#" onclick="addWishList('{{$products->id}}','jewellery')" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
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
    <!-- End .single-product-thumb -->

    <div class="woocommerce-tabs wc-tabs-wrapper bg-vista-white">
        <div class="container">

            <div class="product-desc-wrapper">
                <h4 class="mb--60 desc-heading">Description</h4>
                <div class="row mb--15">
                    <div class="col-lg-6 mb--30">
                        <div class="single-desc">
                            <h5 class="title">Specifications:</h5>
                            <p>Hypoallergenic and tarnish-resistant, designed for all-day comfort and lasting beauty.Polished to a fine finish for a smooth feel and brilliant shine that holds up over time.Made with lead-free, nickel-free materials, perfect for sensitive skin.
                                Lightweight yet sturdy, ideal for both everyday wear and special occasions.</p>
                        </div>
                    </div>
                    <!-- End .col-lg-6 -->
                    <div class="col-lg-6 mb--30">
                        <div class="single-desc">
                            <h5 class="title">Care & Maintenance:</h5>
                            <p>Each piece is carefully inspected and polished to ensure flawless quality before reaching you. Our jewelry undergoes thorough quality checks and finishing touches for lasting durability and shine.</p>
                        </div>
                    </div>
                    <!-- End .col-lg-6 -->
                </div>
                <!-- End .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="pro-des-features">
                            <li class="single-features">
                                <div class="icon">
                                    <img src="{{ asset('user/assets/images/product/product-thumb/icon-3.png') }}" alt="icon">
                                </div>
                                Fast Delivery
                            </li>
                            <li class="single-features">
                                <div class="icon">
                                    <img src="{{ asset('user/assets/images/product/product-thumb/icon-2.png') }}" alt="icon">
                                </div>
                                Quality Service
                            </li>
                            <li class="single-features">
                                <div class="icon">
                                    <img src="{{ asset('user/assets/images/product/product-thumb/icon-1.png') }}" alt="icon">
                                </div>
                                Original Product
                            </li>
                        </ul>
                        <!-- End .pro-des-features -->
                    </div>
                </div>
                <!-- End .row -->
            </div>
            <!-- End .product-desc-wrapper -->

            <hr class="saprator">

            
            <div class="additional-info pt--20  pb_sm--20">
                <h4 class="mb--60">Additional Information</h4>
                    <div class="product-additional-info">
                        <div class="table-responsive">
                            <table>
                                <tbody>   
                                    @if ($products->product_id)
                                    <tr>                                         
                                        <th>Product Id</th>                                         
                                        <td>{{$products->product_id}}</td>                                     
                                    </tr>   
                                    @endif         

                                    @if ($products->gross_weight)
                                    <tr>                                         
                                        <th>Gross Weight</th>                                         
                                        <td>{{$products->gross_weight}}</td>                                     
                                    </tr> 
                                    @endif     

                                    @if ($products->occasion)
                                    <tr>                                         
                                        <th>Occasions</th>                                         
                                        <td>{{$products->occasion}}</td>                                     
                                    </tr>  
                                    @endif    

                                    @if ($products->material_color)
                                    <tr>                                         
                                        <th>Materail Color</th>                                         
                                        <td>{{$products->material_color}}</td>                                     
                                    </tr> 
                                    @endif                                     
                                    @if ($products->jewellery_type)
                                    <tr>                                         
                                        <th>Jewellery Type</th>                                         
                                        <td>{{$products->jewellery_type}}</td>                                     
                                    </tr> 
                                    @endif                                   
                                    @if ($products->size)
                                    <tr>                                         
                                        <th>Size</th>                                         
                                        <td>{{$products->size}}</td>                                     
                                    </tr> 
                                    @endif                                     
                                    @if ($products->diamond_clarity)
                                    <tr>                                         
                                        <th>Diamond Clarity</th>                                         
                                        <td>{{$products->diamond_clarity}}</td>                                     
                                    </tr>
                                    @endif  

                                    @if ($products->diamond_weight)
                                    <tr>                                         
                                        <th>Diamond Weight</th>                                         
                                        <td>{{$products->diamond_weight}}</td>                                     
                                    </tr> 
                                    @endif                                     
                                    
                                    @if ($products->no_of_diamonds)
                                    <tr>                                         
                                        <th>No of Diamond</th>                                         
                                        <td>{{$products->no_of_diamonds}}</td>                                     
                                    </tr>  
                                    @endif                                      

                                    @if ($products->diamond_shape)
                                    <tr>                                         
                                        <th>Diamond Shape</th>                                         
                                        <td>{{$products->diamond_shape}}</td>                                     
                                    </tr>
                                    @endif                                     
                                    
                                    
                                    @if ($products->diamond_setting)
                                    <tr>                                         
                                        <th>Diamond Setting</th>                                         
                                        <td>{{$products->diamond_setting}}</td>                                     
                                    </tr>
                                    @endif     

                                    @if ($products->metal)
                                    <tr>                                         
                                        <th>Metal</th>                                         
                                        <td>{{$products->metal}}</td>                                     
                                    </tr>
                                    @endif        

                                    @if ($products->gold_purity)
                                    <tr>                                         
                                        <th>Gold Purity</th>                                         
                                        <td>{{$products->gold_purity}}</td>                                     
                                    </tr> 
                                    @endif      
                                                                    
                                    @if ($products->pendant_height)
                                    <tr>                                         
                                        <th>Pendant Height</th>                                         
                                        <td>{{$products->pendant_height}}</td>                                     
                                    </tr> 
                                    @endif        

                                    @if ($products->pendant_width)
                                    <tr>                                         
                                        <th>Pendant Width</th>                                         
                                        <td>{{$products->pendant_width}}</td>                                     
                                    </tr>  
                                    @endif
                                    
                                    @if ($products->earring_height)
                                    <tr>                                         
                                        <th>Earing Height</th>                                         
                                        <td>{{$products->earring_height}}</td>                                     
                                    </tr> 
                                    @endif                                      
                                    
                                    @if ($products->earring_width)
                                    <tr>                                         
                                        <th>Earing Width</th>                                         
                                        <td>{{$products->earring_width}}</td>                                     
                                    </tr> 
                                    @endif                                    
                                
                                    @if ($products->watch_height)
                                    <tr>                                         
                                        <th>Watch Height</th>                                         
                                        <td>{{$products->watch_height}}</td>                                     
                                    </tr>  
                                    @endif  
                                    
                                    @if ($products->watch_width)
                                    <tr>                             
                                        <th>Watch Width</th>                                         
                                        <td>{{$products->watch_width}}</td>                                     
                                    </tr> 
                                    @endif                                  
                                                                    
                                                                        
                                </tbody>
                                
                            </table>
                        </div>
                    </div>

            </div>
                <!-- End .product-additional-info -->

            <hr class="saprator">

            <div class="container pt--0 my-5">
                <h4 class="mb--60">Price Breakdown</h4>
                <div class="table-responsive">
                    <table class="table table-custom">
                        <thead>
                            <tr>
                                <th>Product Details</th>
                                <th>Rate</th>
                                <th>Weight</th>
                                <th>Discount</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img src="{{ asset('user/assets/images/icons/pb-gold.png') }}" alt="Gold Icon"> {{$products->metal}} <small>{{$products->purity}}KT</small></td>
                            <td>$ {{$products->gold_price_per_gram}}/g</td>
                            <td>{{$products->gold_weight_in_gm}}g</td>
                            <td>-</td>
                            <td>$ {{$products->gold_price_per_gram * $products->gold_weight_in_gm}}</td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('user/assets/images/icons/pb-stone.png') }}" alt="Stone Icon"> Stone</td>
                            <td>-</td>
                            <td>{{$products->diamond_weight}}ct</td>
                            <td>-</td>
                            <td>$ {{$products->diamond_price}} </td>
                        </tr>
                        <tr>
                            <td>Making Charges</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>$  {{$products->making_charge}}</td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td>-</td>
                            <td>{{$products->gross_weight}}g <small>Gross Wt.</small></td>
                            <td>-</td>
                            <td>$
                                {{
                                    ($products->gold_price_per_gram ?? 0) * ($products->gold_weight_in_gm ?? 0) 
                                    + ($products->making_charge ?? 0) + ($products->diamond_price ?? 0)
                                }}
                            </td>
                            </tr>
                        <tr>
                            <td>Discount</td>
                            <td>-</td>
                            <td>-</td>
                            <td >-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Subtotal after Discount</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>$
                                {{
                                    ($products->gold_price_per_gram ?? 0) * ($products->gold_weight_in_gm ?? 0) 
                                    + ($products->making_charge ?? 0) + ($products->diamond_price ?? 0)
                                }}
                            </td>
                        </tr>
                        <tr>
                            <td>GST</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>$ {{$products->gst}}</td>
                        </tr>
                        <tr class="grand-total">
                            <td>Grand Total</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>$ {{$products->price}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- end of price breakdown --}}
            <hr class="saprator">

            <div class="reviews-wrapper pt--20">
                <h4 class="mb--60">Reviews</h4>
                <div class="row">
                    <div class="col-lg-6 mb--40">
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
                    <div class="col-lg-6 mb--40">
                        <!-- Start Comment Respond  -->
                        @include('partials.review-form',['product_id'=>$products->id,'product_type'=>'jewellery'])
                        
                        <!-- End Comment Respond  -->
                    </div>
                    <!-- End .col -->
                </div>
            </div>
            <!-- End .reviews-wrapper -->

        </div>
    </div>
    <!-- end woocommerce-tabs -->

 
</div>
<!-- End Shop Area  -->

<!-- Start Recently Viewed Product Area  -->
<div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i>Related Items</span>
        </div>
        <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
            @foreach ($relatedProducts as $relatedProduct)
            <div class="slick-single-layout">
                <div class="axil-product">
                    <div class="thumbnail">
                        <a href="{{url('product-details/'.$relatedProduct->id)}}">
                            <img src="{{ asset('storage/'.$relatedProduct->images->first()->image_path)}}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <h5 class="title"><a href="{{url('product-details/'.$relatedProduct->id)}}">{{$relatedProduct->name}}</a></h5>
                            <div class="product-price-variant">
                                <span class="price current-price">${{$relatedProduct->price}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End .slick-single-layout -->
            @endforeach
           
           

        </div>
    </div>
</div>
<!-- End Recently Viewed Product Area  -->
@include('partials.faq')

<!-- Start Related Blog Area  -->
<div class="related-blog-area bg-color-white pb--60 pb_sm--40">
    <div class="container">
        <div class="section-title-wrapper mb--70 mb_sm--40 pr--110">
            <span class="title-highlighter highlighter-primary mb--10"> <i class="fal fa-bell"></i>Hot News</span>
            <h3 class="mb--25">Related Blog</h3>
        </div>
        <div class="related-blog-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">

            @foreach ($blogs as $blog)
                    @include('partials.related-blogs',['blog'=>$blog])
            @endforeach
       
            <!-- End .slick-single-layout -->
            
            
        </div>
    </div>
</div>

<!-- Start Axil Newsletter Area  -->
<div class="my-5" class="gap">
<!-- Start Axil Newsletter Area  -->
@include('partials.newsletter')
<!-- End Related Blog Area  -->
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
    document.getElementById("delivery-button").addEventListener("click", function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    const userLatitude = position.coords.latitude;
                    const userLongitude = position.coords.longitude;

                    // Specific latitude and longitude of the center of India
                    const indiaCenterLatitude = 23.5937;
                    const indiaCenterLongitude = 78.9629;

                    // Function to calculate distance between two points using the Haversine formula
                    function calculateDistance(lat1, lon1, lat2, lon2) {
                        const R = 6371; // Radius of Earth in kilometers
                        const dLat = (lat2 - lat1) * Math.PI / 180;
                        const dLon = (lon2 - lon1) * Math.PI / 180;

                        const a = 
                            Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                            Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                            Math.sin(dLon / 2) * Math.sin(dLon / 2);

                        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                        return R * c;
                    }

                    // Calculate the distance from the user's location to the center of India
                    const distance = calculateDistance(userLatitude, userLongitude, indiaCenterLatitude, indiaCenterLongitude);

                    // Get the current date
                    let currentDate = new Date();

                    // Calculate the delivery date based on distance
                    let deliveryDate = new Date(currentDate);
                    if (distance <= 1800) {
                        deliveryDate.setDate(currentDate.getDate() + 19);
                    } else {
                        deliveryDate.setDate(currentDate.getDate() + 31);
                    }

                    // Format the delivery dates
                    const options = { year: 'numeric', month: 'short', day: 'numeric' };
                    const formattedDeliveryDate = deliveryDate.toLocaleDateString('en-GB', options);

                    // Display the delivery estimate by replacing the button with the date
                    document.getElementById("delivery-button").innerHTML = `<p>Estimated Delivery Date: ${formattedDeliveryDate}</p>`;
                },
                function(error) {
                    console.error("Geolocation error:", error);
                }
            );
        } else {
            console.error("Geolocation is not supported by this browser.");
        }
    });
</script>

@endpush