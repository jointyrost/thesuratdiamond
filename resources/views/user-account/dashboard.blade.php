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
                            <li class="axil-breadcrumb-item"><a href="index.html">Welcome, </a></li>
                            <li class="axil-breadcrumb-item active" aria-current="page"> {{auth()->user()->name}}</li>
                        </ul>
                        <h1 class="title">My Account</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                     <div class="inner">
                        <div class="bradcrumb-thumb">
                            @if (empty(auth()->user()->avatar))
                            <img src="{{asset('user/assets/images/avatar.jpg')}}" alt="Image" class="img-responsive profile-logo" width="50px" id="saler-user-img">
                            @else 
                            <img src="{{ asset('storage/'.auth()->user()->avatar)}}" alt="Image" class="img-responsive profile-logo" width="50px" id="saler-user-img">
                            @endif 
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->

    <!-- Start My Account Area  -->
    <div class="axil-dashboard-area axil-section-gap">
        <div class="container">
            <div class="axil-dashboard-warp">
                 
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <aside class="axil-dashboard-aside">
                            <nav class="axil-dashboard-nav">
                                <div class="nav nav-tabs" role="tablist">
                                    <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-dashboard" role="tab" aria-selected="true"><i class="fas fa-th-large"></i>Dashboard</a>
                                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-orders" role="tab" aria-selected="false"><i class="fas fa-shopping-basket"></i>Orders</a>
                                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-address" role="tab" aria-selected="false" tabindex="-1"><i class="fas fa-home"></i>Addresses</a>  
                                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-account" role="tab" aria-selected="false"><i class="fas fa-user"></i>Account Details</a>
                                    <a class="nav-item nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fal fa-sign-out"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </nav>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-md-8">
                        <div class="tab-content">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <p class="alert alert-danger">{{ Session::get('error') }}</p>
                            @endif
                            @if (Session::has('success'))
                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                            @endif
                            <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel">
                                <div class="axil-dashboard-overview">
                                    <div class="welcome-text">Hello, <b>{{auth()->user()->name}}</b></div>
                                    <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>
                                </div>
                            </div> 
                            <div class="tab-pane fade" id="nav-orders" role="tabpanel">
                                <div class="axil-dashboard-order">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: fit-content;">Order</th>
                                                    <th scope="col" style="width: fit-content;">Order Date</th>
                                                    <th scope="col" style="width: fit-content;">Delivery Date</th>
                                                    <th scope="col" style="width: fit-content;">Order Status</th>
                                                    <th scope="col" style="width: fit-content;">Track ID</th>
                                                    <th scope="col" style="width: fit-content;">Total</th>
                                                    <th scope="col" style="width: fit-content;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($successfulOrders as $order)
                                                    <tr>
                                                        <th scope="row">#{{ $order->id }}</th>
                                                        <td>{{ $order->created_at ? $order->created_at->format('F j, Y') : 'N/A' }}</td> <!-- Order Date -->
                                                        <td>{{ \Carbon\Carbon::parse($order->delivery_date)->format('j M Y') }}</td>
                                                        <td>{{ ucfirst($order->status) }}</td> <!-- Order Status -->
                                                        <td>
                                                            @if($order->track_id)
                                                                {{ $order->track_id }}
                                                            @else
                                                                {{ $order->status === 'shipped' ? 'Tracking ID to be provided' : 'Not Shipped Yet' }}
                                                            @endif
                                                        </td>
                                                        <td> @if ($order['payment_currency'] === "USD")$@else₹@endif
                                                            {{ number_format($order->total, 2) }}</td>
                                                        <td>
                                                            <button type="button" 
                                                                    class="btn btn-primary view-btn" 
                                                                    data-bs-toggle="modal" 
                                                                    data-bs-target="#orderDetailsModal"
                                                                    data-order-id="{{ $order->id }}"
                                                                    data-order-status="{{ $order->status }}"
                                                                    data-order-total="{{ number_format($order->total, 2) }}"
                                                                    data-order-date="{{ $order->created_at->format('F j, Y') }}">
                                                                View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6">No successful orders found.</td>
                                                    </tr>
                                                @endforelse

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="nav-address" role="tabpanel">
                                @include('user-account.accounts.address-tab')
                            </div>
                            <div class="tab-pane fade" id="nav-account" role="tabpanel">
                                @include('user-account.accounts.account-tab')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End My Account Area  -->

    <!-- Start Axil Newsletter Area  -->
    <div class="axil-newsletter-area axil-section-gap pt--0">
        <div class="container">
            <div class="etrade-newsletter-wrapper bg_image bg_image--11">
                <div class="newsletter-content">
                    <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                    <h2 class="title mb--40 mb_sm--30 text-white">Get weekly update</h2>
                    <div class="input-group newsletter-form">
                        <div class="position-relative newsletter-inner mb--15">
                            <input placeholder="example@gmail.com" type="text">
                        </div>
                        <button type="submit" class="axil-btn mb--15">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
 
</main>
@endsection