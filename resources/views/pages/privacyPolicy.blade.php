@extends('layouts.main')

@section('content')
<main class="main-wrapper"> 
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">Privacy Policy</li>
                        </ul>
                        <h1 class="title">Privacy Policy</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="{{ asset('user/assets/images/logo/logo.png') }}" alt="Privacy Policy Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="axil-privacy-area axil-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="axil-privacy-policy">
                        <span class="policy-published">This Privacy Policy was last updated on {{ now()->format('F jS, Y') }}.</span>

                        <h4 class="title">Introduction</h4>
                        <p>At THE SURAT DIAMOND, we value your trust and are committed to protecting your personal data. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website, purchase diamond jewelry, and engage with our services.</p>
                        
                        <h4 class="title">Data We Collect</h4>
                        <ul>
                            <li>**Personal Information**: Name, email address, phone number, billing and shipping address.</li>
                            <li>**Payment Information**: Card details (processed securely by our payment gateway).</li>
                            <li>**Browsing Data**: Cookies, IP address, and interactions on our website.</li>
                            <li>**Purchase History**: Details of items purchased, including diamonds, jewelry, or other related products.</li>
                        </ul>

                        <h4 class="title">How We Use Your Information</h4>
                        <p>Your data helps us deliver the best experience by:</p>
                        <ul>
                            <li>Processing your orders and ensuring timely delivery.</li>
                            <li>Providing customer support and handling inquiries.</li>
                            <li>Sending updates, offers, and promotional content (if consented).</li>
                            <li>Improving our website and tailoring content to your preferences.</li>
                        </ul>

                        <h4 class="title">Cookies and Tracking Technologies</h4>
                        <p>We use cookies and similar technologies to enhance your browsing experience. These small data files help us remember your preferences, analyze traffic, and deliver tailored content. You can manage cookie settings in your browser.</p>

                        <h4 class="title">Third-Party Services</h4>
                        <p>To provide seamless services, we may share data with trusted third parties, such as payment processors and shipping providers. These parties are contractually obligated to keep your data secure and confidential.</p>

                        <h4 class="title">Data Security</h4>
                        <p>We implement robust security measures, including encryption and access controls, to protect your data. However, no system is entirely foolproof, and we encourage you to safeguard your account credentials.</p>

                        <h4 class="title">Your Rights</h4>
                        <p>You have the right to:</p>
                        <ul>
                            <li>Access, correct, or delete your personal data.</li>
                            <li>Opt-out of marketing communications.</li>
                            <li>Request data portability.</li>
                            <li>Restrict or object to data processing under certain circumstances.</li>
                        </ul>
                        <p>To exercise these rights, please contact us at <a href="mailto:support@thesuratdiamond.com">support@thesuratdiamond.com</a>.</p>

                        <h4 class="title">Data Retention</h4>
                        <p>We retain your data as long as necessary to fulfill the purposes outlined in this policy, including complying with legal obligations and resolving disputes. Upon request, we will securely delete your data.</p>

                        <h4 class="title">Policy Updates</h4>
                        <p>We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. The latest version will always be available on our website.</p>

                        <h4 class="title">Contact Us</h4>
                        <p>If you have any questions about this policy or how we handle your data, please contact us at <a href="mailto:support@thesuratdiamond.com">support@thesuratdiamond.com</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</main>
@endsection
