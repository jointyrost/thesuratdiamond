@extends('layouts.main')

@section('content')
<main class="main-wrapper"> 
    <!-- Breadcrumb Section -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">Terms and Conditions</li>
                        </ul>
                        <h1 class="title">Terms and Conditions</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="{{ asset('user/assets/images/logo/logo.png') }}" alt="Terms and Conditions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Breadcrumb Section -->

    <!-- Terms and Conditions Section -->
    <div class="axil-privacy-area axil-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="axil-privacy-policy">
                        <h4 class="title">Introduction</h4>
                        <p>Welcome to our website. By accessing or using our services, you agree to comply with and be bound by the following terms and conditions. Please review them carefully.</p>
                        
                        <h4 class="title">Use of the Site</h4>
                        <p>You agree to use the website only for lawful purposes and in a way that does not infringe on the rights of, restrict, or inhibit anyone else's use of the site.</p>

                        <h4 class="title">Intellectual Property</h4>
                        <p>All content on this website, including text, graphics, logos, and images, is our property or the property of our content suppliers. Unauthorized use is prohibited.</p>

                        <h4 class="title">User Responsibilities</h4>
                        <ul>
                            <li>Ensure the accuracy of the information provided.</li>
                            <li>Maintain the confidentiality of your account credentials.</li>
                            <li>Comply with all applicable laws and regulations.</li>
                        </ul>

                        <h4 class="title">Limitation of Liability</h4>
                        <p>We will not be held liable for any damages arising from the use of this website or the inability to use it, including but not limited to direct, indirect, incidental, punitive, or consequential damages.</p>

                        <h4 class="title">Changes to Terms</h4>
                        <p>We reserve the right to update or modify these terms at any time without prior notice. Your continued use of the website after changes are made constitutes acceptance of those changes.</p>

                        <h4 class="title">Contact Information</h4>
                        <p>If you have any questions about these Terms and Conditions, you can contact us at <a href="mailto:support@thesuratdiamond.com">support@thesuratdiamond.com</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Terms and Conditions Section -->

</main>
@endsection
