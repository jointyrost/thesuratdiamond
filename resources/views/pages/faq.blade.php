@extends('layouts.main')

@section('content')
<main class="main-wrapper"> 
    <!-- Breadcrumb Section -->
    <div class="axil-breadcrumb-area bg-light text-black py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex align-items-center">
                        <ul class="breadcrumb mb-0 me-3">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-warning">Home</a></li>
                            <li class="breadcrumb-item active text-black" aria-current="page">FAQ</li>
                        </ul>
                        <h1 class="display-5 fw-bold ms-3">Frequently Asked Questions</h1>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <img src="{{ asset('user/assets/images/logo/logo.png') }}" class="img-fluid" alt="FAQ Image">
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow border-0">
                    <div class="card-body p-4">
                        <h2 class="h3 fw-bold text-primary mb-4">FAQs</h2>
                        <div class="accordion" id="faqAccordion">
                            <!-- FAQ Item 1 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold text-secondary" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#faq1" 
                                            aria-expanded="false" 
                                            aria-controls="faq1">
                                        What is your return policy?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        We do not accept returns. All sales are final, and we recommend ensuring your selection is correct before completing your purchase.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 2 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold text-secondary" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#faq2" 
                                            aria-expanded="false" 
                                            aria-controls="faq2">
                                        How do I track my order?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        You can track your order using the tracking link sent to your email after dispatch. Contact our support for assistance.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 3 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold text-secondary" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#faq3" 
                                            aria-expanded="false" 
                                            aria-controls="faq3">
                                        Do you offer international shipping?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        Yes, we offer international shipping. Shipping charges and delivery times vary by location.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 4 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold text-secondary" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#faq4" 
                                            aria-expanded="false" 
                                            aria-controls="faq4">
                                        What payment methods do you accept?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        We accept payments via UPI, credit cards, debit cards, net banking, and popular digital wallets such as Google Pay, PhonePe, and Paytm through Razorpay's secure platform.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 5 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold text-secondary" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#faq5" 
                                            aria-expanded="false" 
                                            aria-controls="faq5">
                                        Are your diamonds ethically sourced?
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        Yes, all our diamonds are ethically sourced and conflict-free, meeting the highest ethical and environmental standards.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 6 -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold text-secondary" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#faq6" 
                                            aria-expanded="false" 
                                            aria-controls="faq6">
                                        Can I customize my order?
                                    </button>
                                </h2>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        Absolutely! We offer customization options for jewelry to ensure you get exactly what you desire. Contact our support team for assistance.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
