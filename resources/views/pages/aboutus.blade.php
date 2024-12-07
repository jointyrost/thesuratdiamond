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
                            <li class="axil-breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">About Us</li>
                        </ul>
                        <h1 class="title">About The Surat Diamond</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="{{asset('user/assets/images/logo/logo.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->

    <!-- Start About Area  -->
    <div class="axil-about-area about-style-1 axil-section-gap ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-thumbnail">
                        <div class="thumbnail">
                            <img src="{{asset('user/assets/images/product/jewellery/2.png')}}" alt="About Us">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <div class="about-content content-right">
                        <span class="title-highlighter highlighter-primary2"> <i class="far fa-gem"></i>About Us</span>
                        <h3 class="title">Where Diamonds Find Their Spark (and Maybe You Find Yours Too!)</h3>
                        <span class="text-heading">At The Surat Diamond, we do more than sell diamonds – we help you find the perfect piece that creates lasting memories and ignites a personal connection.</span>
                        <p>Let’s be honest, diamonds are magical. They capture light, hold history within their tiny facets, and have the power to make someone's eyes well up with joy (or maybe that's just us?). We're not just in the business of diamonds – we’re in the business of helping you find that special piece that’s more than just jewelry. It’s a story waiting to be told.</p>
                        <p class="mb--0">Whether you're planning a proposal, celebrating a milestone, or simply treating yourself, we’re here to help you discover the perfect diamond that says, "This is the one."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->
    
    <!-- Start Our Story Area  -->
    <div class="axil-about-area about-style-2 axil-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-thumbnail">
                        <img src="{{asset('user/assets/images/product/jewellery/3.png')}}" alt="about">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content content-right">
                        <span class="subtitle">The Surat Diamond Story</span>
                        <h4 class="title">From the Heart of India’s Diamond Trade to Your Hands</h4>
                        <p>Imagine a hot afternoon in Surat, India, the bustling heart of the global diamond trade. Here, generations of expertise have passed through family-run businesses, honing a keen eye for quality. That’s the same spirit we bring to The Surat Diamond, whether you’re browsing from a luxury store or the comfort of your home in your pajamas.</p>
                        <p>Every diamond we sell is meticulously handpicked by our team of passionate gemologists, who bring a combined wealth of expertise. We don’t just look at specs – we feel the fire within each stone. Our diamonds are selected for their unique beauty, brilliance, and the story they have to tell.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Story Area  -->
    {{-- <div class="about-info-area">
        <div class="container">
            <div class="row row--20">
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb">
                            <img src="user/assets/images/about/shape-01.png" alt="Shape">
                        </div>
                        <div class="content">
                            <h6 class="title">40,000+ Happy Customer</h6>
                            <p>Join our community of satisfied clients who trust us for premium diamond jewelry. Enjoy exceptional quality and service with every purchase</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb">
                            <img src="user/assets/images/about/shape-02.png" alt="Shape">
                        </div>
                        <div class="content">
                            <h6 class="title">16 Years of Experiences</h6>
                            <p>we bring you meticulously crafted diamond jewelry, combining timeless elegance with superior craftsmanship you can trust.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb">
                            <img src="user/assets/images/about/shape-03.png" alt="Shape">
                        </div>
                        <div class="content">
                            <h6 class="title">Renowned for Excellence</h6>
                            <p>Our commitment to exceptional quality and craftsmanship has made us a trusted name in the diamond jewelry industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Start Expertise Area  -->
    <div class="axil-about-area about-style-2 axil-section-gap bg-wild-sand">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class="about-thumbnail">
                        <img src="{{asset('user/assets/images/product/jewellery/4.png')}}" alt="about">
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="about-content content-left">
                        <span class="subtitle">Handpicked Diamonds</span>
                        <h4 class="title">Expertise You Can Trust, Service You'll Love</h4>
                        <p>At The Surat Diamond, we offer both natural and lab-grown diamonds, ensuring that every client can find a piece that resonates with them. Whether you're drawn to the classic elegance of a natural diamond or the sustainable brilliance of lab-grown stones, we’ve got a dazzling selection to make your heart sing.</p>
                        <p>We’re real people, not robots programmed to spout diamond jargon. Whether you’re a seasoned collector or just starting your diamond journey, we’re here to answer your questions, guide you, and most importantly, help you find the diamond that whispers, "This is the one."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Expertise Area  -->

    <!-- Start Values Area  -->
    <div class="axil-about-area about-style-2 axil-section-gap">
        <div class="container">
            <div class="row align-items-center mb--80 mb_sm--60">
                <div class="col-lg-5">
                    <div class="about-thumbnail">
                        <img src="{{asset('user/assets/images/product/jewellery/5.png')}}" alt="about">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content content-right">
                        <span class="subtitle">Our Commitment</span>
                        <h4 class="title">Craftsmanship, Quality, and Passion</h4>
                        <p>We’re passionate about our diamonds, but more importantly, we’re passionate about helping you find the perfect one. Whether you’re planning a momentous occasion or simply celebrating yourself, we want to make sure your diamond journey is a smooth and memorable one.</p>
                        <p>Each of our pieces is designed to be a reflection of individuality, making every item a statement of personal style.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Values Area  -->

    
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
@endsection
