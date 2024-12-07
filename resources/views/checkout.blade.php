@extends('layouts.main')


@section('content')
<main class="main-wrapper">

    <!-- Start Checkout Area  -->
    <div class="axil-checkout-area axil-section-gap">
        <div class="container">
            {{-- <div class="row">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group input-group form-check">
                            <input type="checkbox" id="default_address" name="default_address">
                            <label for="checkbox1">Use default Address</label>
                        </div>
                        
                    </div> 
                </div> 
            </div> --}}
            <form  id="shipping_address" action="{{route('checkout.submit')}}" method="POST">
                @csrf
                <input type="hidden" name="cart_id" value="{{$cart_id}}"> 
                <div class="row">
                    <div class="col-lg-6"> 
                        <div class="axil-checkout-billing">
                            <h4 class="title mb--40">Shipping Details</h4>
                            
                            <div class="form-group">
                                <label>First Name <span>*</span></label>
                                <input type="text" name="name" >
                            </div>
                            <!-- Row for Country Code and Mobile Number -->
                            <div class="form-row d-flex">
                                <div class="form-group col-4">
                                    <label>Country Code <span>*</span></label>
                                    <select name="country_code" class="form-control">
                                        {{-- @foreach (getCountryCodes() as $code) --}}
                                            {{-- <option value="{{$code}}">+{{$code}}</option> --}}
                                            <option value="1">+1 (United States)</option>
                                            <option value="1">+1 (Canada)</option>
                                            <option value="44">+44 (United Kingdom)</option>
                                            <option value="91">+91 (India)</option>
                                            <option value="81">+81 (Japan)</option>
                                            <option value="61">+61 (Australia)</option>
                                            <option value="49">+49 (Germany)</option>
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                                <div class="form-group col-8">
                                    <label>Mobile Number <span>*</span></label>
                                    <input type="text" name="mobile_number" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email Address <span>*</span></label>
                                <input type="email" name="email"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Country/ Region <span>*</span></label>
                                <select id="Region" name="country_id">
                                    @foreach (getCountry() as $row)
                                    <option value="{{$row['id']}}">{{$row['country_name']}}</option>
                                    @endforeach
                                     
                                </select>
                            </div>
                            <div class="form-group">
                                <label>State <span>*</span></label>
                                <input type="text" name="state" >
                            </div> 
                            <div class="form-group">
                                <label>Town/ City <span>*</span></label>
                                <input type="text" name="city" >
                            </div>
                            <div class="form-group">
                                <label>Street Address <span>*</span></label>
                                <input type="text" name="street_address" class="mb--15" >     
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="axil-order-summery order-checkout-summery">
                            <h5 class="title mb--20">Your Order</h5>
                            <div class="summery-table-wrap">
                                <table class="table summery-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $subTotal = 0;
                                        @endphp
                                        @if (isset($data['cart_items']) && count($data['cart_items']) > 0)
                                            @foreach ($data['cart_items'] as $item)
                                            <input type="hidden" name="price[]" value="{{$item['price']}}"> 
                                            <input type="hidden" name="product_id[]" value="{{$item['main_product_id']}}"> 
                                            <input type="hidden" name="quantity[]" value="{{$item['quantity']}}"> 
                                            <input type="hidden" name="product_type[]" value="{{$item['product_typo']}}"> 
                                            <input type="hidden" name="ring_size[]" value="{{$item['ring_size']}}"> 
                                            @php
                                                $subTotal +=   $item['quantity'] * $item['price'];
                                            @endphp
                                            <tr data-order-id="{{$item['cart_item_id']}}">
                                                <td>{{$item['name']}} <span class="quantity">x {{$item['quantity']}}</span></td>
                                                <td>{{ number_format($item['quantity'] * $item['price'], 2)}}</td>
                                            </tr>
                                            @endforeach
                                        @endif
                                        <tr class="order-subtotal">
                                            <td>Subtotal</td>
                                            <input type="hidden" name="subTotal" value="{{$subTotal}}"> 
                                            <td>${{number_format($subTotal, 2)}}</td>
                                        </tr>
                                         
                                        <tr class="order-total">
                                            <td>Total</td>
                                            <td class="order-total-amount">${{number_format($subTotal, 2)}}</td>
                                        </tr>
                                        <tr class="completion-date">
                                            <td style="vertical-align: middle;" >DELIVERY DATE</td>
                                            <td>
                                                <input type="hidden" name="delivery_date" id="delivery_date">
                                                <p id="delivery-button" class="delivery-button" style="cursor: pointer; color: rgb(0, 0, 0);">Click to Check Delivery Date</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="order-payment-method">
                                {{-- Uncomment if Cash on Delivery is needed --}}
                                {{-- <div class="single-payment">
                                    <div class="input-group">
                                        <input type="radio" id="radio5" name="payment_method" value="COD">
                                        <label for="radio5">Cash on delivery</label>
                                    </div>
                                    <p>Pay with cash upon delivery.</p>
                                </div> --}}
                            
                                <div class="single-payment">
                                    <div class="input-group justify-content-between align-items-center">
                                        <input type="radio" id="radio6" name="payment_currency" checked value="USD">
                                        <label for="radio6">RazorPay</label>
                                        <img src="{{ asset('user/assets/images/others/payment.png') }}" alt="Paypal payment">
                                    </div>
                                    <p>Want to Pay in USD.</p>
                                </div>
                            
                                <div class="single-payment">
                                    <div class="input-group justify-content-between align-items-center">
                                        <input type="radio" id="radio7" name="payment_currency" value="INR">
                                        <label for="radio7">Razorpay</label>
                                        <img style="max-width: 10rem" src="{{ asset('user/assets/images/others/rozarpay.png') }}" alt="Rozarpay payment">
                                    </div>
                                    <p>Want to Pay in INR.</p>
                                </div>
                            </div>
                            
                            <button type="submit" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</button>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Checkout Area  -->

</main>
@endsection
@push('scripts')
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
                    document.getElementById("delivery-button").innerHTML = `<p>${formattedDeliveryDate}</p>`;

                     // Set the hidden input's value
                document.getElementById("delivery_date").value = deliveryDate.toISOString().split('T')[0]; // Format as YYYY-MM-DD
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