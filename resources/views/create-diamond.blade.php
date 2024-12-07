@push('styles')
<link rel="stylesheet" href="{{ asset('user/assets/css/ring.css') }}">
@endpush
@extends('layouts.main')

@section('content')
    <!-- End Header -->
    <main class="main-wrapper">
      <!-- Start Slider Area -->
       <div class="axil-main-slider-area pt-5 small-bg bg_image--8">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-sm-8">
                        <div class="main-slider-content">
                            <h3 class="title small-heading">Ready-To-Ship Engagement Rings</h3>
                            <p>For the proposal that can't wait.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-5 mt-5">
            <h2>Wizard Form</h2>
            <ul class="nav nav-tabs" id="wizardTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1" data-step="1">Choose a Setting
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2" data-step="2">Choose Stones</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3" data-step="3">Add To Cart</a>
                </li>
                
            </ul>

            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="step1">a</div>
                <div class="tab-pane fade show " id="step2">b</div>
                <div class="tab-pane fade show " id="step3">c</div>
        </div>
            
    </main>
@endsection