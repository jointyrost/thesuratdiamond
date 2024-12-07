@push('styles')
<link rel="stylesheet" href="{{ asset('user/assets/css/ring.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('user/assets/css/360view.css') }}"> --}}
<style>
.single-product-thumb .thumbnail img {
  border: 3px solid rgba(0, 0, 0, 0);!important;
  border-radius: 8px !important; 
}

/*  thubma; */
/* Customize the small thumbnails */
.single-product-thumb .thumbnail img.active {
  border-color: var(--color-primary)!important;
}
</style>

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
        <div  class="container-fluid  px-5 mt-5">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <p style="max-width: 60%" class="text-center">
                    Create Your <strong>Lab Grown Diamond, Natural Diamond Or Fancy Lab Grown Engagement Ring</strong>  With Our Engagement Ring builder.
                </p>
                <h1 class="py-3 pb-5">Choose the setting for your stone</h1>


            </div>
            <ul class="nav nav-tabs" id="wizardTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1" data-step="1">Choose a Setting
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#stoneType" data-step="2">Choose Stone</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link disabled" id="step3-tab" data-bs-toggle="tab" href="#step3" data-step="3">Add to Cart</a>
                </li>
                
            </ul>

              <div class="tab-content mt-3">
                    <div class=" tab-pane fade show active" id="step1">
                        <div class="row mt-5">
                            <div class="col-lg-7">
                                <div class="title-button-container">
                                    <span data-bs-target="#shapeTypeModal" data-bs-toggle="modal" class="card-link shape-btn p-2 text-small"  onclick="popupShow('shapeType','Shape')">  Shape <i class="fa-solid fa-question"></i></span> 
                                </div>
                                <div id="shapeTypeContent">
                                    <div class="scrollable-container settingProperty" id="shape">
                                        <div class="box-part-two text-center"> 
                                            <div class="icon  getElement" data-id="round">
                                            <img src="user/assets/images/icons/shape/round.svg" class="svg-icon icon-div" alt="Service">
                                            </div>
                                            <div class="title ">
                                            <h4>Round</h4>
                                            </div> 
                                        </div>
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="oval">
                                                <img src="user/assets/images/icons/shape/oval.svg" class="svg-icon icon-div" alt="Oval">
                                            </div>
                                            <div class="title">
                                                <h4>Oval</h4>
                                            </div> 
                                        </div>
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="Heart">
                                                <img src="user/assets/images/icons/shape/heart.svg" class="svg-icon icon-div" alt="Heart">
                                            </div>
                                            <div class="title">
                                                <h4>Heart</h4>
                                            </div> 
                                        </div>
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="Princess">
                                                <img src="user/assets/images/icons/shape/princesss.svg" class="svg-icon icon-div" alt="Princess">
                                            </div>
                                            <div class="title">
                                                <h4>Princess</h4>
                                            </div> 
                                        </div>
                                        
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="emerald">
                                                <img src="user/assets/images/icons/shape/emerald.svg" class="svg-icon icon-div" alt="Emerald">
                                            </div>
                                            <div class="title">
                                                <h4>Emerald</h4>
                                            </div> 
                                        </div>
                                        
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="radiant">
                                                <img src="user/assets/images/icons/shape/radiant.svg" class="svg-icon icon-div" alt="Radiant">
                                            </div>
                                            <div class="title">
                                                <h4>Radiant</h4>
                                            </div> 
                                        </div>
                                        
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="pear">
                                                <img src="user/assets/images/icons/shape/pear.svg" class="svg-icon icon-div" alt="Pear">
                                            </div>
                                            <div class="title">
                                                <h4>Pear</h4>
                                            </div> 
                                        </div>
                                        
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="cushion">
                                                <img src="user/assets/images/icons/shape/cushion.svg" class="svg-icon icon-div" alt="Cushion">
                                            </div>
                                            <div class="title">
                                                <h4>Cushion</h4>
                                            </div> 
                                        </div>
                                        
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="Elongated Cushion">
                                                <img src="user/assets/images/icons/shape/elongated_cushion.svg" class="svg-icon icon-div" alt="Elongated Cushion">
                                            </div>
                                            <div class="title">
                                                <h4>Elongated Cushion</h4>
                                            </div> 
                                        </div>
                                        
                                        
                                        
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="Marquise">
                                                <img src="user/assets/images/icons/shape/marq.svg" class="svg-icon icon-div" alt="Marquise">
                                            </div>
                                            <div class="title">
                                                <h4>Marquise</h4>
                                            </div> 
                                        </div>
                                        
                                        
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="asscher">
                                                <img src="user/assets/images/icons/shape/assher.svg" class="svg-icon icon-div" alt="Asscher">
                                            </div>
                                            <div class="title">
                                                <h4>Asscher</h4>
                                            </div> 
                                        </div>
                                        <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="Elongated Hexagon">
                                                <img src="user/assets/images/icons/shape/marqui.svg" class="svg-icon icon-div" alt="Elongated Hexagon">
                                            </div>
                                            <div class="title">
                                                <h4>Elongated Hexagon</h4>
                                            </div> 
                                        </div>
                                        {{-- <div class="box-part-two text-center"> 
                                            <div class="icon getElement" data-id="Square Emerald">
                                                <img src="user/assets/images/icons/shape/assher.svg" class="svg-icon icon-div" alt="Square Emerald">
                                            </div>
                                            <div class="title">
                                                <h4>Square Emerald</h4>
                                            </div> 
                                        </div> --}}
                                        
                                       
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-5 text-center">
                                <div class="title-button-container">
                                <span class="card-link shape-btn p-2 text-small" onclick="popupShow('metalType','Ring Metal Type')"> METAL TYPE <i class="fa-solid fa-question"></i></span>
                                {{-- <span class="card-link  p-2  "> 
                                    <div class="form-check ">
                                        <input type="checkbox" class="form-check-input" id="smallCheckbox">
                                        <label class="form-check-label" for="smallCheckbox">TWO TONE</label>
                                    </div>
                                </span>   --}}
                                </div>
                                <div id="metalTypeContent">
                                <div class="scrollable-container settingProperty d-flex justify-content-around " id="metal_type">
                                <div class="box-part-two text-center box-align"> 
                                    <div class="icon  getElement" data-id="platinum">
                                        <img src="user/assets/images/icons/metal/platinum.svg" class="svg-icon" alt="Platinum">
                                    </div>
                                    <div class="title">
                                        <h4>Platinum</h4>
                                    </div> 
                                </div>
                                
                                <div class="box-part-two text-center box-align"> 
                                    <div class="icon  getElement" data-id="18k Yellow Gold">
                                        <img src="user/assets/images/icons/metal/yello gold.svg" class="svg-icon" alt="18k Yellow Gold">
                                    </div>
                                    <div class="title">
                                        <h4>18k Yellow Gold</h4>
                                    </div> 
                                </div>
                                
                                <div class="box-part-two text-center box-align"> 
                                    <div  class="icon  getElement" data-id="18k Rose Gold">
                                        <img src="user/assets/images/icons/metal/rose gold.svg" class="svg-icon" alt="18k Rose Gold">
                                    </div>
                                    <div class="title">
                                        <h4>18k Rose Gold</h4>
                                    </div> 
                                </div>
                                
                                <div class="box-part-two text-center box-align"> 
                                    <div class="icon  getElement" data-id="18k White Gold">
                                        <img src="user/assets/images/icons/metal/white gold.svg" class="svg-icon" alt="18k White Gold">
                                    </div>
                                    <div class="title">
                                        <h4>18k White Gold</h4>
                                    </div> 
                                </div>
                                
                                </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-5 mt-3">
                                <div class="title-button-container">
                                    <span class="card-link shape-btn p-2 text-small" onclick="popupShow('settingType','Ring Setting Style')"> SETTING STYLE <i class="fa-solid fa-question"></i></span>
                                    
                                </div>
                                <div id="settingTypeContent">
                                    <div class="scrollable-container settingProperty d-flex justify-content-around" id="setting_style">
                                        <!-- Triology -->
                                        <div class="box-part-two text-center"> 
                                        <div class="icon  getElement" data-id="Trilogy">
                                            <img src="user/assets/images/icons/ringsetting/tri.svg" class="svg-icon" alt="Triology">
                                        </div>
                                        <div class="title">
                                            <h4>Triology</h4>
                                        </div> 
                                        </div>

                                        <!-- Solitaire -->
                                        <div class="box-part-two text-center"> 
                                        <div class="icon  getElement" data-id="Solitaire">
                                            <img src="user/assets/images/icons/ringsetting/soli.svg" class="svg-icon" alt="Solitaire">
                                        </div>
                                        <div class="title">
                                            <h4>Solitaire</h4>
                                        </div> 
                                        </div>

                                        <!-- Halo -->
                                        <div class="box-part-two text-center"> 
                                        <div class="icon  getElement" data-id="Halo">
                                            <img src="user/assets/images/icons/ringsetting/halo.svg" class="svg-icon" alt="Halo">
                                        </div>
                                        <div class="title">
                                            <h4>Halo</h4>
                                        </div> 
                                        </div>

                                        <!-- Toi et Moi -->
                                        <div class="box-part-two text-center"> 
                                        <div class="icon  getElement" data-id="Toi et Moi">
                                            <img src="user/assets/images/icons/ringsetting/toi.svg" class="svg-icon" alt="Toi et Moi">
                                        </div>
                                        <div class="title">
                                            <h4>Toi et Moi</h4>
                                        </div> 
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="title-button-container">
                                    <span class="card-link shape-btn p-2 text-small" onclick="popupShow('bandType','Band Type')"> BAND TYPE <i class="fa-solid fa-question"></i></span>
                                    
                                </div>
                                <div id="bandTypeContent">
                                <div class="scrollable-container settingProperty d-flex justify-content-around" id="band_style">
                                    <!-- Plain -->
                                    <div class="box-part-two text-center"> 
                                    <div  class="icon  getElement" data-id="Plain">
                                        <img src="user/assets/images/icons/band/plain.svg" class="svg-icon" alt="Plain">
                                    </div>
                                    <div class="title">
                                        <h4>Plain</h4>
                                    </div> 
                                    </div>

                                    <!-- Pavé -->
                                    <div class="box-part-two text-center"> 
                                    <div  class="icon  getElement" data-id="Pave">
                                        <img src="user/assets/images/icons/band/pave.svg" class="svg-icon" alt="Pave">
                                    </div>
                                    <div class="title">
                                        <h4>Pavé</h4>
                                    </div> 
                                    </div>

                                    <!-- Accents -->
                                    <div class="box-part-two text-center"> 
                                    <div class="icon  getElement" data-id="Accents">
                                        <img src="user/assets/images/icons/band/acc.svg" class="svg-icon" alt="Accents">
                                    </div>
                                    <div class="title">
                                        <h4>Accents</h4>
                                    </div> 
                                    </div>

                                </div>
                                </div>
                                
                            </div>  

                            <div class="col-lg-3 mt-3">
                                <div class="title-button-container">
                                    <span class="card-link shape-btn p-2 text-small" onclick="popupShow('settingProfile','Setting Profile')"> 
                                        SETTING PROFILE <i class="fa-solid fa-question"></i>
                                    </span>
                                </div>
                                <div id="settingProfileContent">
                                    <div class="scrollable-container settingProperty d-flex justify-content-around" id="setting_profile">
                                        <!-- High Set -->
                                        <div  class="profile-setting text-center"> 
                                            <div class="icon  getElement" data-id="High Set">
                                                <img src="user/assets/images/icons/profile/high.svg" class="svg-icon" alt="High Set">
                                            </div>
                                            <div class="title">
                                                <h4>High Set</h4>
                                            </div> 
                                        </div>

                                        <!-- Low Set -->
                                        <div class="profile-setting text-center"> 
                                            <div class="icon  getElement" data-id="Low Set">
                                                <img src="user/assets/images/icons/profile/low.svg" class="svg-icon" alt="Low Set">
                                            </div>
                                            <div class="title">
                                                <h4>Low Set</h4>
                                            </div> 
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-12 mt-3 py-5" style="margin-bottom: -20px">
                            <div class="diamond-category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                <!-- Start Single Select  -->
                                {{-- <select class="single-select">
                                    <option>Sort by Latest</option>
                                    <option>Sort by Name</option>
                                    <option>Sort by Price</option>
                                    <option>Sort by Viewed</option>
                                </select> --}}
                                <select style="position: absolute; right: 40px; width: fit-content" id="sortSelect" class="single-select-ring">
                                    <option value="latest">Sort by Latest</option>
                                    <option value="name">Sort by Name</option>
                                    <option value="price">Sort by Price</option>
                                </select>
                                <!-- End Single Select  -->
                            </div>
                        </div>
                        <div class="row row--15" id="productGrid">
                        <!-- Products will be injected here dynamically -->
                        </div>
                        <div id="observerTarget"></div>
                        
                    </div>
                    <div class="stoneProperty tab-pane fade mt-5" id="stoneType">
                        <div class="row">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="multi-step-tab-container">
                                    <div class="multi-step-tab newGetElement" data-tab="multi-step-tab3" data-id="natural-diamond" ><span>Natural Diamond</span></div>
                                    <div class="multi-step-tab newGetElement active" data-tab="multi-step-tab1" data-id="lab-grown-diamond" ><span>Lab Grown Diamond</span></div>
                                    <div class="multi-step-tab newGetElement" data-tab="multi-step-tab2" data-id="coloured-lab-grown-diamond" ><span>Fancy Lab Grown Diamond</span></div>
                                    {{-- <div class="multi-step-tab newGetElement" data-tab="multi-step-tab4" data-id="sapphire" ><span>Sapphire</span></div> --}}
                                </div>
                            </div>
                        </div>
                        <div id="multi-step-tab1" class="multi-step-tab-content active">
                            <div class="col-md-12">
                                <nav>
                                    <div class="nav nested-nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nested-nav-item nested-nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Shape, Carat, Price</a>

                                        <a class="nested-nav-item nested-nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">4C's of Diamond</a>

                                        <a class="nested-nav-item nested-nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Advanced</a>
                                    </div>
                                </nav>
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="container-fluid ">
                                                <div class="row">
                                                    <div class="title-button-container">
                                                        <span class="card-link shape-btn p-2 text-small" onclick="popupShow('shapeType','Shape')"> SHAPE TYPE <span id="nestedCol_shape"></span><i class="fa-solid fa-question"></i></span> 
                                                    </div>
                                                    <div class="scrollable-container stoneProperty" id="stoneShape" >
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Round">
                                                                <img src="user/assets/images/icons/shape/round.svg" alt="Image" width="50px" data-text="nestedCol_1" data-parent="nestedCol_shape" class="img-fluid mb-0  nested-icon-div p-2">
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_1">Round</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Oval">
                                                                <img src="user/assets/images/icons/shape/oval.svg" alt="Image" width="50px" data-text="nestedCol_2" data-parent="nestedCol_shape"  class="img-fluid mb-0 p-2 nested-icon-div">
                                                                <div>
                                                                    <h5 class="mb-0"  id="nestedCol_2">Oval</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Heart">
                                                                <img src="user/assets/images/icons/shape/heart.svg" alt="Image" width="50px" class="img-fluid p-2 mb-0 nested-icon-div" data-text="nestedCol_13" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_13">Heart</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                          <!-- Repeat this block for each of the 10 items -->
                                                          <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Princess">
                                                                <img src="user/assets/images/icons/shape/princesss.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_10" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_10">Princess</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part  nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Emerald">
                                                                <img src="user/assets/images/icons/shape/emerald.svg" alt="Image" width="50px" class="img-fluid mb-0 p-2 nested-icon-div" data-text="nestedCol_3" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_3">Emerald</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Radiant">
                                                                <img src="user/assets/images/icons/shape/radiant.svg" alt="Image" width="50px" class="img-fluid mb-0 p-2 nested-icon-div" data-text="nestedCol_4" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_4">Radiant</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Pear">
                                                                <img src="user/assets/images/icons/shape/pear.svg" alt="Image" width="50px" class="img-fluid p-2 mb-0 nested-icon-div" data-text="nestedCol_5" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_5">Pear</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Cushion">
                                                                <img src="user/assets/images/icons/shape/cushion.svg" alt="Image" width="50px" class="img-fluid p-2 mb-0 nested-icon-div" data-text="nestedCol_6" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_6">Cushion</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Elongated Cushion">
                                                                <img src="user/assets/images/icons/shape/elongated_cushion.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_7" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_7">Elongated Cushion</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        <div class="box-part nestedCol nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Elongated Hexagon">
                                                                <img src="user/assets/images/icons/shape/marqui.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_8" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_8">Elongated Hexagon</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Marquise">
                                                                <img src="user/assets/images/icons/shape/marq.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_9" data-parent="nestedCol_shape" > 
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_9">Marquise</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-0 newGetElement" data-id="Asscher">
                                                                <img src="user/assets/images/icons/shape/assher.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_11" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_11">Asscher</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        {{-- <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-0 newGetElement" data-id="Square Emerald">
                                                                <img src="user/assets/images/icons/shape/diamond.svg" alt="Image" width="50px" class="img-fluid p-2 mb-0 nested-icon-div" data-text="nestedCol_12" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_12">Square Emerald</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        
                                                    </div>
                                                
                                                
                                                </div>
                                                <div class="row">  
                                                
                                                    <div class="col-lg-6 pt-2">
                                                        <div class="title-button-container pt-2 pb-5">
                                                            <span class="card-link shape-btn p-2 text-small" onclick="popupShow('caratType','Carat')"> 
                                                                CARAT <span id="nestedCol_shape"></span><i class="fa-solid fa-question"></i>
                                                            </span>
                                                        </div> 
                                                        <div id="caratRange"></div> <!-- Range Slider -->
                                                        <div class="carat-labels ">
                                                            <span style="display: none" id="carat-start">0.75ct</span>  <span style="display: none" id="carat-end">10.00ct</span>
                                                        </div>
                                                        <input type="hidden" class="form-control " id="startCarat" readonly>
                                                        <input type="hidden" class="form-control "  id="endCarat"  readonly>
                                                    </div>
                                                    
                                                
                                                    <div class="col-lg-6 pt-2">
                                                        <div class="title-button-container pt-2 pb-5">
                                                            <span class="card-link shape-btn p-2 text-small"> PRICE (USD)</span>
                                                        </div>
                                                        
                                                        <div id="priceRange"></div>
                                                        
                                                        <div class="price-labels">
                                                            <span style="display: none" id="price-start">$0</span> <span  style="display: none" id="price-end">$400,000</span>
                                                        </div>
                                                    
                                                        <input type="hidden" class="form-control" id="startPrice" readonly>
                                                        <input type="hidden" class="form-control" id="endPrice" readonly>
                                                    </div>
                                                    
                                                </div>
                                        </div> 
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="row">  
                                            
                                                <div class="col-lg-6 pt-3 px-5">
                                                    <div class="title-button-container pt-2 pb-5"  onclick="popupShow('colorType','Carat')">
                                                        <span class="card-link shape-btn p-2 text-small">COLOUR ?</span> 
                                                    </div>
                                                
                                                    <!-- Color Range Slider -->
                                                    <div class="slider-container" style="position: relative;">
                                                        <div id="colorRange"></div>
                                                
                                                        <!-- Labels showing the selected colors -->
                                                        <div class="color-labels pt-3" >
                                                        </div>
                                                    </div>
                                                
                                                    <!-- Hidden inputs to store color values -->
                                                    <input type="hidden" class="form-control" id="startColor" readonly>
                                                    <input type="hidden" class="form-control" id="endColor" readonly>
                                                </div>
                                                
                                                
                                                <div class="col-lg-6 pt-3 px-5">
                                                    <div class="title-button-container pt-2 pb-5" onclick="popupShow('cutType','Cut')">
                                                        <span class="card-link shape-btn p-2 text-small">CUT ?</span>
                                                    </div>
                                                
                                                    <!-- Cut Range Slider -->
                                                    <div class="slider-container" style="position: relative;">
                                                        <div id="cutRange"></div>
                                                
                                                        <!-- Labels showing the selected cut grades -->
                                                        <div class="cut-labels" ></div>
                                                    </div>
                                                
                                                    <!-- Hidden inputs to store cut values -->
                                                    <input type="hidden" class="form-control" id="startCut" readonly>
                                                    <input type="hidden" class="form-control" id="endCut" readonly>
                                                </div>
                                                

                                                <div class="col-lg-12 pt-3 px-5">
                                                    <div class="title-button-container pt-2 pb-5" onclick="popupShow('clarityType','Clarity')">
                                                        <span class="card-link shape-btn p-2 text-small">CLARITY ?</span>
                                                    </div>
                                                
                                                    <!-- Clarity Range Slider -->
                                                    <div class="slider-container" style="position: relative; ">
                                                        <div id="clarityRange"></div>
                                                
                                                        <!-- Labels showing the selected clarity grades -->
                                                        <div class="clarity-labels pt-3" ></div>
                                                    </div>
                                                
                                                    <!-- Hidden inputs to store clarity values -->
                                                    <input type="hidden" class="form-control" id="startClarity" readonly>
                                                    <input type="hidden" class="form-control" id="endClarity" readonly>
                                                </div>
                                                
                                                
                                                
                                                
                                                
                                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="row">

                                            {{-- START OF DEPTH SVG --}}

                                            <div class="col-lg-6 pt-3 px-5">
                                                <div class="title-button-container pt-2 pb-5"  onclick="popupShow('depthType','Depth')">
                                                    <span class="card-link shape-btn p-2 text-small">DEPTH % ?</span>
                                                </div>
                                            
                                                <!-- Depth Range Slider -->
                                                <div class="slider-container" style="position: relative;">
                                                    <div id="depthRange"></div>
                                            
                                                    <!-- Labels showing selected depth percentages -->
                                                    <div class="depth-labels" ></div>
                                                </div>
                                            
                                                <!-- Hidden inputs to store depth values -->
                                                <input type="hidden" class="form-control" id="startDepth" readonly>
                                                <input type="hidden" class="form-control" id="endDepth" readonly>
                                            </div>
                                            
                                            
                                            {{-- END OF DEPTH SVG --}}
                                            
                                            <div class="col-lg-6 pt-3 px-5">
                                                <div class="title-button-container pt-2 pb-5"  onclick="popupShow('tableType','Table')">
                                                    <span class="card-link shape-btn p-2 text-small">TABLE % ?</span>
                                                </div>
                                            
                                                <!-- Table Range Slider -->
                                                <div class="slider-container" style="position: relative; ">
                                                    <div id="tableRange"></div>
                                            
                                                    <!-- Labels showing selected table percentages -->
                                                    <div class="table-labels" ></div>
                                                </div>
                                            
                                                <!-- Hidden inputs to store table values -->
                                                <input type="hidden" class="form-control" id="startTable" readonly>
                                                <input type="hidden" class="form-control" id="endTable" readonly>
                                            </div>
                                            
                                            
                                            <div class="col-lg-12 pt-3 px-5">
                                                <div class="title-button-container pt-2 pb-5"  onclick="popupShow('lwType','Length / Width')">
                                                    <span class="card-link shape-btn p-2 text-small">LENGTH / WIDTH RATIO ?</span>
                                                </div>
                                            
                                                <!-- Length/Width Ratio Slider -->
                                                <div class="slider-container" style="position: relative; ">
                                                    <div id="lengthWidthRange"></div>
                                            
                                                    <!-- Labels showing selected length/width ratio -->
                                                    <div class="length-width-labels" ></div>
                                                </div>
                                            
                                                <!-- Hidden inputs to store ratio values -->
                                                <input type="hidden" class="form-control" id="startLWRatio" readonly>
                                                <input type="hidden" class="form-control" id="endLWRatio" readonly>
                                            </div>
                                            
                                            
                                    

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3 py-5" style="margin-bottom: -20px">
                                    <div class="diamond-category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                        <!-- Start Single Select  -->
                                        {{-- <select class="single-select">
                                            <option>Sort by Latest</option>
                                            <option>Sort by Name</option>
                                            <option>Sort by Price</option>
                                            <option>Sort by Viewed</option>
                                        </select> --}}
                                        <select style="position: absolute; right: 40px; width: fit-content" id="sortSelect" class="single-select">
                                            <option value="latest">Sort by Latest</option>
                                            <option value="name">Sort by Name</option>
                                            <option value="price">Sort by Price</option>
                                        </select>
                                        <!-- End Single Select  -->
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div id="multi-step-tab2" class="multi-step-tab-content">
                            <div class="row mt-5">
                                <div class="col-lg-8">
                                    <div class="title-button-container">
                                        <span class="card-link shape-btn p-2 text-small" onclick="popupShow('shapeType','Shape')">  Shape <i class="fa-solid fa-question"></i></span> 
                                    </div>
                                    <div id="shapeTypeContent">
                                        <div class="scrollable-container stoneProperty" id="stoneShape">
                                            <div class="box-part-two text-center"> 
                                                <div class="icon  newGetElement" data-id="round">
                                                <img src="user/assets/images/icons/shape/round.svg" class="svg-icon icon-div" alt="Service">
                                                </div>
                                                <div class="title ">
                                                <h4>Round</h4>
                                                </div> 
                                            </div>
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="oval">
                                                    <img src="user/assets/images/icons/shape/oval.svg" class="svg-icon icon-div" alt="Oval">
                                                </div>
                                                <div class="title">
                                                    <h4>Oval</h4>
                                                </div> 
                                            </div>
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="Heart">
                                                    <img src="user/assets/images/icons/shape/heart.svg" class="svg-icon icon-div" alt="Heart">
                                                </div>
                                                <div class="title">
                                                    <h4>Heart</h4>
                                                </div> 
                                            </div>
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="Princess">
                                                    <img src="user/assets/images/icons/shape/princesss.svg" class="svg-icon icon-div" alt="Princess">
                                                </div>
                                                <div class="title">
                                                    <h4>Princess</h4>
                                                </div> 
                                            </div>
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="emerald">
                                                    <img src="user/assets/images/icons/shape/emerald.svg" class="svg-icon icon-div" alt="Emerald">
                                                </div>
                                                <div class="title">
                                                    <h4>Emerald</h4>
                                                </div> 
                                            </div>
                                            
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="radiant">
                                                    <img src="user/assets/images/icons/shape/radiant.svg" class="svg-icon icon-div" alt="Radiant">
                                                </div>
                                                <div class="title">
                                                    <h4>Radiant</h4>
                                                </div> 
                                            </div>
                                            
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="pear">
                                                    <img src="user/assets/images/icons/shape/pear.svg" class="svg-icon icon-div" alt="Pear">
                                                </div>
                                                <div class="title">
                                                    <h4>Pear</h4>
                                                </div> 
                                            </div>
                                            
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="cushion">
                                                    <img src="user/assets/images/icons/shape/cushion.svg" class="svg-icon icon-div" alt="Cushion">
                                                </div>
                                                <div class="title">
                                                    <h4>Cushion</h4>
                                                </div> 
                                            </div>
                                            
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="Elongated Cushion">
                                                    <img src="user/assets/images/icons/shape/elongated_cushion.svg" class="svg-icon icon-div" alt="Elongated Cushion">
                                                </div>
                                                <div class="title">
                                                    <h4>Elongated Cushion</h4>
                                                </div> 
                                            </div>
                                            
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="Elongated Hexagon">
                                                    <img src="user/assets/images/icons/shape/marqui.svg" class="svg-icon icon-div" alt="Elongated Hexagon">
                                                </div>
                                                <div class="title">
                                                    <h4>Elongated Hexagon</h4>
                                                </div> 
                                            </div>
                                            
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="Marquise">
                                                    <img src="user/assets/images/icons/shape/marq.svg" class="svg-icon icon-div" alt="Marquise">
                                                </div>
                                                <div class="title">
                                                    <h4>Marquise</h4>
                                                </div> 
                                            </div>
                                            
                                            
                                            
                                            <div class="box-part-two text-center"> 
                                                <div class="icon getElement" data-id="asscher">
                                                    <img src="user/assets/images/icons/shape/assher.svg" class="svg-icon icon-div" alt="Asscher">
                                                </div>
                                                <div class="title">
                                                    <h4>Asscher</h4>
                                                </div> 
                                            </div>
                                            
                                            <div class="box-part-two text-center"> 
                                                <div class="icon newGetElement" data-id="Square Emerald">
                                                    <img src="user/assets/images/icons/shape/assher.svg" class="svg-icon icon-div" alt="Square Emerald">
                                                </div>
                                                <div class="title">
                                                    <h4>Square Emerald</h4>
                                                </div> 
                                            </div>
                                            
                                         
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-4">
                                    <div class="title-button-container">
                                    <span class="card-link shape-btn p-2 text-small" onclick="popupShow('metalType','Ring Metal Type')"> Fancy Color Diamond <i class="fa-solid fa-question"></i></span>
                                    
                                    </div>
                                    <div id="metalTypeContent">
                                        <div class="scrollable-container stoneProperty d-flex justify-content-around" id="treated_color">
                                            <div class="box-part-two text-center box-align"> 
                                                <div class="icon  newGetElement" data-id="pink">
                                                    <img src="user/assets/images/icons/color/diamcol_pink.Btd9nnMN.svg" class="svg-icon" alt="Platinum">
                                                </div>
                                                <div class="title">
                                                    <h4>Pink</h4>
                                                </div> 
                                            </div>
                                            
                                            <div class="box-part-two text-center box-align"> 
                                                <div class="icon  newGetElement" data-id="blue">
                                                    <img src="user/assets/images/icons/color/diamcol_blue.DN5tfCp8.svg" class="svg-icon" alt="18k Yellow Gold">
                                                </div>
                                                <div class="title">
                                                    <h4>Blue</h4>
                                                </div> 
                                            </div>
                                            
                                            <div class="box-part-two text-center box-align"> 
                                                <div  class="icon  newGetElement" data-id="yellow">
                                                    <img src="user/assets/images/icons/color/diamcol_yellow.TXnYA3H3.svg" class="svg-icon" alt="18k Rose Gold">
                                                </div>
                                                <div class="title">
                                                    <h4>Yellow</h4>
                                                </div> 
                                            </div>
                                        
                                        
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-4 pt-2">
                                    <div class="title-button-container pt-2 pb-5">
                                        <span class="card-link shape-btn p-2 text-small" onclick="popupShow('caratType','Carat')"> 
                                            CARAT <span id="nestedCol_shape"></span><i class="fa-solid fa-question"></i>
                                        </span>
                                    </div> 

                                    
                                    <div class="slider-container" style="position: relative;">
                                        <div id="caratRangeColoured"></div> <!-- Range Slider -->
                                        <div class="caratColoured-labels ">
                                            <span style="display: none" id="carat-start">0.75ct</span>  <span style="display: none" id="carat-end">10.00ct</span>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control " id="startCaratColoured" readonly>
                                    <input type="hidden" class="form-control "  id="endCaratColoured"  readonly>
                                </div>
                                
                            
                                <div class="col-lg-4 pt-2">
                                    <div class="title-button-container pt-2 pb-5">
                                        <span class="card-link shape-btn p-2 text-small" > 
                                            PRICE (USD) <span id="nestedCol_price"></span>
                                        </span>
                                    </div> 
                                    
                                    <div class="slider-container" style="position: relative;">
                                        <div id="priceRangeColoured"></div> <!-- Range Slider -->
                                        <div class="priceColoured-labels">
                                            <span style="display: none" id="price-start">$0</span>  
                                            <span style="display: none" id="price-end">$400,000</span>
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" class="form-control" id="startPriceColoured" readonly>
                                    <input type="hidden" class="form-control" id="endPriceColoured" readonly>
                                </div>
                            
                                <div class="col-lg-4 pt-2">
                                    <div class="title-button-container pt-2 pb-5">
                                        <span class="card-link shape-btn p-2 text-small" onclick="popupShow('clarityType','Clarity')"> 
                                            Clarity  <span id="nestedCol_price_coloured"></span><i class="fa-solid fa-question"></i>
                                        </span>
                                    </div> 
                                    
                                    <div class="slider-container" style="position: relative;">
                                        <div id="clarityRangeColoured"></div> <!-- Range Slider -->
                                        <div class="clarityColoured-labels">
                                            <span style="display: none" id="price-start">$0</span>  
                                            <span style="display: none" id="price-end">$400,000</span>
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" class="form-control" id="startClarityColoured" readonly>
                                    <input type="hidden" class="form-control" id="endClarityColoured" readonly>
                                </div>

                                <div class="col-lg-12 mt-3 py-5" style="margin-bottom: -20px">
                                    <div class="diamond-category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                        <!-- Start Single Select  -->
                                        {{-- <select class="single-select">
                                            <option>Sort by Latest</option>
                                            <option>Sort by Name</option>
                                            <option>Sort by Price</option>
                                            <option>Sort by Viewed</option>
                                        </select> --}}
                                        <select style="position: absolute; right: 40px; width: fit-content" id="sortSelect" class="single-select">
                                            <option value="latest">Sort by Latest</option>
                                            <option value="name">Sort by Name</option>
                                            <option value="price">Sort by Price</option>
                                        </select>
                                        <!-- End Single Select  -->
                                    </div>
                                </div>
                                
                                
                            </div> 
                        </div>

                        <div id="multi-step-tab3" class="multi-step-tab-content">
                            <div class="col-md-12">
                                <nav>
                                    <div class="nav nested-nav-tabs nav-fill"  role="tablist">
                                        <a class="nested-nav-item nested-nav-link active" id="nav-naturalShape-tab" data-bs-toggle="tab" href="#nav-naturalShape" role="tab" aria-controls="nav-home" aria-selected="true">Shape, Carat, Price</a>

                                        <a class="nested-nav-item nested-nav-link" id="nav-naturalColor-tab" data-bs-toggle="tab" href="#nav-naturalColor" role="tab" aria-controls="nav-profile" aria-selected="false">4C's of Diamond</a>

                                        <a class="nested-nav-item nested-nav-link" id="nav-naturalAdvanced-tab" data-bs-toggle="tab" href="#nav-naturalAdvanced" role="tab" aria-controls="nav-contact" aria-selected="false">Advanced</a>
                                    </div>
                                </nav>
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-naturalShape" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="container-fluid">
                                                <div class="row">
                                                    <div class="title-button-container">
                                                        <span class="card-link shape-btn p-2 text-small" onclick="popupShow('shapeType','Shape')"> SHAPE TYPE <span id="nestedCol_shape"></span><i class="fa-solid fa-question"></i></span> 
                                                    </div>
                                                    <div class="scrollable-container stoneProperty" id="stoneShape" >
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Round">
                                                                <img src="user/assets/images/icons/shape/round.svg" alt="Image" width="50px" data-text="nestedCol_1" data-parent="nestedCol_shape" class="img-fluid mb-0  nested-icon-div p-2">
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_1">Round</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Oval">
                                                                <img src="user/assets/images/icons/shape/oval.svg" alt="Image" width="50px" data-text="nestedCol_2" data-parent="nestedCol_shape"  class="img-fluid mb-0 p-2 nested-icon-div">
                                                                <div>
                                                                    <h5 class="mb-0"  id="nestedCol_2">Oval</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Heart">
                                                                <img src="user/assets/images/icons/shape/heart.svg" alt="Image" width="50px" class="img-fluid p-2 mb-0 nested-icon-div" data-text="nestedCol_13" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_13">Heart</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Princess">
                                                                <img src="user/assets/images/icons/shape/princesss.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_10" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_10">Princess</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part  nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Emerald">
                                                                <img src="user/assets/images/icons/shape/emerald.svg" alt="Image" width="50px" class="img-fluid mb-0 p-2 nested-icon-div" data-text="nestedCol_3" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_3">Emerald</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Radiant">
                                                                <img src="user/assets/images/icons/shape/radiant.svg" alt="Image" width="50px" class="img-fluid mb-0 p-2 nested-icon-div" data-text="nestedCol_4" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_4">Radiant</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Pear">
                                                                <img src="user/assets/images/icons/shape/pear.svg" alt="Image" width="50px" class="img-fluid p-2 mb-0 nested-icon-div" data-text="nestedCol_5" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_5">Pear</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Cushion">
                                                                <img src="user/assets/images/icons/shape/cushion.svg" alt="Image" width="50px" class="img-fluid p-2 mb-0 nested-icon-div" data-text="nestedCol_6" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_6">Cushion</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Elongated Cushion">
                                                                <img src="user/assets/images/icons/shape/elongated_cushion.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_7" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_7">Elongated Cushion</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        <div class="box-part nestedCol nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Elongated Hexagon">
                                                                <img src="user/assets/images/icons/shape/marqui.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_8" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_8">Elongated Hexagon</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-2 newGetElement" data-id="Marquise">
                                                                <img src="user/assets/images/icons/shape/marq.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_9" data-parent="nestedCol_shape" > 
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_9">Marquise</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                        
                                                        <div class="box-part nestedCol col-sm-3 col-md-4 col-lg-2 mb-3">
                                                            <div class="text-center px-0 newGetElement" data-id="Asscher">
                                                                <img src="user/assets/images/icons/shape/assher.svg" alt="Image" width="50px" class="img-fluid  p-2 mb-0 nested-icon-div" data-text="nestedCol_11" data-parent="nestedCol_shape" >
                                                                <div>
                                                                    <h5 class="mb-0" id="nestedCol_11">Asscher</h5>
                                                                    <!-- Additional content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Repeat this block for each of the 10 items -->
                                                       
                                                       
                                                    </div>
                                                
                                                
                                                </div>
                                                <div class="row">  
                                                
                                                    <div class="col-lg-6 pt-2">
                                                        <div class="title-button-container pt-2 pb-5">
                                                            <span class="card-link shape-btn p-2 text-small" onclick="popupShow('caratType','Carat')"> 
                                                                CARAT <span id="nestedCol_shape"></span><i class="fa-solid fa-question"></i>
                                                            </span>
                                                        </div> 

                                                        
                                                        <div class="slider-container pt-3" style="position: relative;">
                                                            <div id="caratRangeNatural"></div> <!-- Range Slider -->
                                                            <div class="caratNatural-labels pt-3">
                                                                <span style="display: none" id="carat-start">0.75ct</span>  <span style="display: none" id="carat-end">10.00ct</span>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="form-control " id="startCaratNatural" readonly>
                                                        <input type="hidden" class="form-control "  id="endCaratNatural"  readonly>
                                                    </div>
                                                    
                                                
                                                    <div class="col-lg-6 pt-2">
                                                        <div class="title-button-container pt-2 pb-5">
                                                            <span class="card-link shape-btn p-2 text-small" > PRICE (USD)</span>
                                                        </div>
                                                        
                                                        <div class="slider-container pt-3" style="position: relative;">
                                                            <div id="priceRangeNatural"></div>
                                                            <div class="priceNatural-labels pt-3">
                                                                <span style="display: none" id="price-start">$0</span> <span  style="display: none" id="price-end">$400,000</span>
                                                            </div>
                                                        </div>
                                                    
                                                        <input type="hidden" class="form-control" id="startPriceNatural" readonly>
                                                        <input type="hidden" class="form-control" id="endPriceNatural" readonly>
                                                    </div>
                                                    
                                                </div>
                                        </div> 
                                    </div>
                                    <div class="tab-pane fade" id="nav-naturalColor" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="row">  
                                            
                                                <div class="col-lg-6 pt-3 px-5">
                                                    <div class="title-button-container pt-2 pb-5"  onclick="popupShow('colorType','Colour')">
                                                        <span class="card-link shape-btn p-2 text-small">COLOR ?</span> 
                                                    </div>
                                                
                                                    <!-- Color Range Slider -->
                                                    <div class="slider-container" style="position: relative;">
                                                        <div id="colorRangeNatural"></div>
                                                
                                                        <!-- Labels showing the selected colors -->
                                                        <div class="colorNatural-labels pt-3" >
                                                        </div>
                                                    </div>
                                                
                                                    <!-- Hidden inputs to store color values -->
                                                    <input type="hidden" class="form-control" id="startColorNatural" readonly>
                                                    <input type="hidden" class="form-control" id="endColorNatural" readonly>
                                                </div>
                                                
                                                
                                                <div class="col-lg-6 pt-3 px-5">
                                                    <div class="title-button-container pt-2 pb-5" onclick="popupShow('cutType','Cut')">
                                                        <span class="card-link shape-btn p-2 text-small">CUT ?</span>
                                                    </div>
                                                
                                                    <!-- Cut Range Slider -->
                                                    <div class="slider-container" style="position: relative;">
                                                        <div id="cutRangeNatural"></div>
                                                
                                                        <!-- Labels showing the selected cut grades -->
                                                        <div class="cutNatural-labels pt-3" ></div>
                                                    </div>
                                                
                                                    <!-- Hidden inputs to store cut values -->
                                                    <input type="hidden" class="form-control" id="startCutNatural" readonly>
                                                    <input type="hidden" class="form-control" id="endCutNatural" readonly>
                                                </div>
                                                

                                                <div class="col-lg-12 pt-3 px-5">
                                                    <div class="title-button-container pt-2 pb-5" onclick="popupShow('clarityType','Clarity')">
                                                        <span class="card-link shape-btn p-2 text-small">CLARITY ?</span>
                                                    </div>
                                                
                                                    <!-- Clarity Range Slider -->
                                                    <div class="slider-container" style="position: relative; ">
                                                        <div id="clarityRangeNatural"></div>
                                                
                                                        <!-- Labels showing the selected clarity grades -->
                                                        <div class="clarityNatural-labels pt-3" ></div>
                                                    </div>
                                                
                                                    <!-- Hidden inputs to store clarity values -->
                                                    <input type="hidden" class="form-control" id="startClarityNatural" readonly>
                                                    <input type="hidden" class="form-control" id="endClarityNatural" readonly>
                                                </div>
                                                
                                                
                                                
                                                
                                                
                                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-naturalAdvanced" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="row">

                                            {{-- START OF DEPTH SVG --}}

                                            <div class="col-lg-6 pt-3 px-5">
                                                <div class="title-button-container pt-2 pb-5" onclick="popupShow('depthType','Depth')">
                                                    <span class="card-link shape-btn p-2 text-small">DEPTH % ?</span>
                                                </div>
                                            
                                                <!-- Depth Range Slider -->
                                                <div class="slider-container" style="position: relative;">
                                                    <div id="depthRangeNatural"></div>
                                            
                                                    <!-- Labels showing selected depth percentages -->
                                                    <div class="depthNatural-labels pt-3" ></div>
                                                </div>
                                            
                                                <!-- Hidden inputs to store depth values -->
                                                <input type="hidden" class="form-control" id="startDepthNatural" readonly>
                                                <input type="hidden" class="form-control" id="endDepthNatural" readonly>
                                            </div>
                                            
                                            
                                            {{-- END OF DEPTH SVG --}}
                                            
                                            <div class="col-lg-6 pt-3 px-5">
                                                <div class="title-button-container pt-2 pb-5" onclick="popupShow('tableType','Table')">
                                                    <span class="card-link shape-btn p-2 text-small">TABLE % ?</span>
                                                </div>
                                            
                                                <!-- Table Range Slider -->
                                                <div class="slider-container" style="position: relative; ">
                                                    <div id="tableRangeNatural"></div>
                                            
                                                    <!-- Labels showing selected table percentages -->
                                                    <div class="tableNatural-labels pt-3" ></div>
                                                </div>
                                            
                                                <!-- Hidden inputs to store table values -->
                                                <input type="hidden" class="form-control" id="startTableNatural" readonly>
                                                <input type="hidden" class="form-control" id="endTableNatural" readonly>
                                            </div>
                                            
                                            
                                            <div class="col-lg-12 pt-3 px-5">
                                                <div class="title-button-container pt-2 pb-5" onclick="popupShow('lwType','Length / Width')">
                                                    <span class="card-link shape-btn p-2 text-small">LENGTH / WIDTH RATIO ?</span>
                                                </div>
                                            
                                                <!-- Length/Width Ratio Slider -->
                                                <div class="slider-container" style="position: relative; ">
                                                    <div id="lengthWidthRangeNatural"></div>
                                            
                                                    <!-- Labels showing selected length/width ratio -->
                                                    <div class="length-widthNatural-labels pt-3" ></div>
                                                </div>
                                            
                                                <!-- Hidden inputs to store ratio values -->
                                                <input type="hidden" class="form-control" id="startLWRatioNatural" readonly>
                                                <input type="hidden" class="form-control" id="endLWRatioNatural" readonly>
                                            </div>
                                            
                                            
                                    

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3 py-5" style="margin-bottom: -20px">
                                    <div class="diamond-category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                        <!-- Start Single Select  -->
                                        {{-- <select class="single-select">
                                            <option>Sort by Latest</option>
                                            <option>Sort by Name</option>
                                            <option>Sort by Price</option>
                                            <option>Sort by Viewed</option>
                                        </select> --}}
                                        <select style="position: absolute; right: 40px; width: fit-content" id="sortSelect" class="single-select">
                                            <option value="latest">Sort by Latest</option>
                                            <option value="name">Sort by Name</option>
                                            <option value="price">Sort by Price</option>
                                        </select>
                                        <!-- End Single Select  -->
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="newProductGrid" class="row"></div>
                        <div id="newObserverTarget"></div> <!-- Lazy loading trigger -->  
                        
                    </div>
                             
                    <div class="tab-pane fade" id="step3">
                        <main class="main-wrapper">
                            <div class="axil-cart-area axil-section-gap">
                              <div class="container">
                                <form action="/create-cart" method="POST">
                                    @csrf
                                  <div class="row">
                                    <div class="col-lg-7">
                                      <!-- Cart Items Section -->
                                      <div class="axil-cart-notice">
                                        <!-- First Product -->
                                        <div id="firstProduct" class="rounded border border-dark-subtle cart-item product-border">
                                          <div class="row">
                                            <div   class="col-lg-3">
                                              <img src="user/assets/images/icons/diamond.svg" alt="Product Image" class="cart-item-image image-border">
                                            </div>
                                            <div class="col-lg-6">
                                              <h5  class="pt-3 fs-2 ">Commodo Blown Lamp</h5>
                                              <input type="hidden" name="ringId" value="">
                                              <p class="price">$117.00</p>
                                              <button type="button" class="axil-btn btn-outline-dar details-btn" onclick="toggleDetails('details1')">Details</button>
                                              <div id="details1" class="product-details-container">
                                                <ul class="product-meta">
                                                    <li style="color: var(--color-body)" class="metalType"></li>
                                                    <li style="color:  var(--color-body)" class="SettingStyle"></li>
                                                    <li style="color:  var(--color-body)" class="BandTyped"></li>
                                                    <li style="color: var(--color-body)" class="SettingProfile"></li>
                                                    <li style="color: var(--color-body)" class="settingShape"></li>
    
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                          
                                        <!-- Second Product -->
                                        <div id="secondProduct" class="rounded border border-dark-subtle cart-item product-border">
                                          <div class="row ">
                                            <div class="col-lg-3">
                                              <img  src="user/assets/images/icons/diamond.svg" alt="Product Image" class="cart-item-image image-border">
                                            </div>
                                            <div class="col-lg-6">
                                              <input type="hidden" name="diamondId" value="">
                                              <h5 class="pt-3 fs-2">Vintage Wooden Chair</h5>
                                              <p class="price ">$198.00</p>
                                              <button type="button" class="axil-btn btn-outline-secondary details-btn" onclick="toggleDetails('details2')">Details</button>
                                              <div id="details2" class="product-details-container">
                                                <ul class="product-meta">
                                                    <li style="color: var(--color-body)" class="stoneType"></li>
                                                    <li style="color: var(--color-body)" class="shape"></li>
                                                    <li style="color: var(--color-body)" class="color"></li>
                                                    <li style="color: var(--color-body)" class="stone_clarity"></li>
                                                    <li style="color: var(--color-body)" class="stone_carat"></li>
                                                    <li style="color: var(--color-body)" class="cut"></li>
                                                    <li style="color: var(--color-body)" class="length"></li>
                                                    <li style="color: var(--color-body)" class="width"></li>
                                                    <li style="color: var(--color-body)" class="depth"></li>

                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                          
                                    <!-- Order Summary Section -->
                                    <div class="col-lg-5">
                                      <div class="axil-order-summery cart-item border border-dark-subtle order-cart-summery">
                                        <h5 class="title mb--20">Cart Summary</h5>
                                        <table class="table summery-table table-borderless ">
                                          <tbody>
                                            <tr class="ring-size-selection">
                                                <td style="vertical-align: middle;" >RING SIZE <span style="color: red;">*</span></td>
                                                <td>
                                                  <select name="ringSize" name="ringSize" class="form-select" required>
                                                    <option value="">Select a ring size</option>
                                                    <option value="E">E</option>
                                                    <option value="E1/2">E 1/2</option>
                                                    <option value="F">F</option>
                                                    <option value="F1/2">F 1/2</option>
                                                    <option value="G">G</option>
                                                    <option value="G1/2">G 1/2</option>
                                                    <option value="H">H</option>
                                                    <option value="H1/2">H 1/2</option>
                                                    <option value="I">I</option>
                                                    <option value="I1/2">I 1/2</option>
                                                    <option value="J">J</option>
                                                    <option value="J1/2">J 1/2</option>
                                                    <option value="K">K</option>
                                                    <option value="K1/2">K 1/2</option>
                                                    <option value="L">L</option>
                                                    <option value="L1/2">L 1/2</option>
                                                    <option value="M">M</option>
                                                    <option value="M1/2">M 1/2</option>
                                                    <option value="N">N</option>
                                                    <option value="N1/2">N 1/2</option>
                                                    <option value="O">O</option>
                                                    <option value="O1/2">O 1/2</option>
                                                    <option value="P">P</option>
                                                    <option value="P1/2">P 1/2</option>
                                                    <option value="Q">Q</option>
                                                    <option value="Q1/2">Q 1/2</option>
                                                    <option value="R">R</option>
                                                    <option value="R1/2">R 1/2</option>
                                                    <option value="S">S</option>
                                                    <option value="S1/2">S 1/2</option>
                                                    <option value="T">T</option>
                                                    <option value="T1/2">T 1/2</option>
                                                    <option value="U">U</option>
                                                    <option value="U1/2">U 1/2</option>
                                                    <option value="V">V</option>
                                                    <option value="V1/2">V 1/2</option>
                                                    <option value="W">W</option>
                                                    <option value="W1/2">W 1/2</option>
                                                    <option value="X">X</option>
                                                    <option value="X1/2">X 1/2</option>
                                                    <option value="Y">Y</option>
                                                    <option value="Y1/2">Y 1/2</option>
                                                    <option value="Z">Z</option>
                                                    <option value="Z1/2">Z 1/2</option>
                                                  </select>
                                                  
                                                </td>
                                              </tr>
                                      
                                              <!-- Resizing Information -->
                                              {{-- <tr class="resizing-info">
                                                <td style="vertical-align: middle;" >RESIZING</td>
                                                <td>
                                                  <p>This ring can be resized up to 3.5 sizes up or down (once made in your selected size).</p>
                                                </td>
                                              </tr> --}}
                                      
                                              <!-- Engraving Field -->
                                              {{-- <tr class="engraving">
                                                <td style="vertical-align: middle;" >ENGRAVING</td>
                                                <td>
                                                  <input type="text" name="engravingText" class="form-control" placeholder="Engraving Text (+36.00 USD)">
                                                </td>
                                              </tr> --}}
                                      
                                              <!-- Completion Date Field -->
                                              <tr class="completion-date">
                                                <td style="vertical-align: middle;" >COMPLETION DATE</td>
                                                <td>
                                                    <p id="delivery-button" class="delivery-button" style="cursor: pointer; color: rgb(0, 0, 0);">Click to Check Delivery Date</p>
                                                </td>
                                              </tr>
                                            
                                            <tr class="order-total">
                                              <td style="vertical-align: middle;" >Total</td>
                                              <td id="totalPrice" class="order-total-amount"></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <button type="submit" class="axil-btn btn-bg-primary checkout-btn" onclick="clearProductSession()" >Add To Cart</button>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </main>
                    </div>
                    
 
                </div>
                
               
                <div class="tab-pane fade" id="step4">
                    <h3>Step 4</h3>
                    <form id="formStep4">
                        <!-- Step 4 form content -->
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div> 
                    </form>
                </div>
            </div>
        </div>
{{--  this section id for faq and details  --}}


<main class="main-wrapper">
    <!-- Introductory Text Section -->
    <div class="container mt--40 mb--40">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p><strong>The Surat Diamond</strong> specialises in <strong>custom-made engagement rings</strong> to complement your perfect proposal. At Surat Diamond, we combine the knowledge of experienced in-house jewellers and an exceptional client service team that can help guide you through every step of the engagement ring design process, from concept to completion.</p>
                <p>Need help choosing your perfect engagement ring? <a href="{{url('/contact-us')}}">Book a virtual appointment</a> or <a href="{{url('/contact-us')}}">at our showroom</a> to talk to one of our friendly engagement ring specialists.</p>
            </div>
        </div>

        <!-- Engagement Ring Styles Links -->
        {{-- <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="button-group mt--20">
                    <a href="#" class="axil-btn btn-outline-primary">Round Engagement Rings</a>
                    <a href="#" class="axil-btn btn-outline-primary">Oval Engagement Rings</a>
                    <a href="#" class="axil-btn btn-outline-primary">Radiant Engagement Rings</a>
                    <a href="#" class="axil-btn btn-outline-primary">Pear Engagement Rings</a>
                    <a href="#" class="axil-btn btn-outline-primary">Emerald Engagement Rings</a>
                    <a href="#" class="axil-btn btn-outline-primary">Solitaire Engagement Rings</a>
                    <a href="#" class="axil-btn btn-outline-primary">Trilogy Engagement Rings</a>
                    <a href="#" class="axil-btn btn-outline-primary">Halo Engagement Rings</a>
                    <a href="#" class="axil-btn btn-outline-primary">Toi et Moi Engagement Rings</a>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- FAQ Section -->
   @include('partials.faq')
    
</main>

{{--  this section id for faq and details  --}}




        <!-- Start Related Blog Area  -->
    <div class="related-blog-area bg-color-white pt-5 pb--60 pb_sm--40">
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
@php
    $excludeJqueryUI = false;  // Set this variable to exclude jQuery UI
@endphp
@push('scripts')   
<script src="user/assets/js/ring.js"></script>
{{-- <script src="user/assets/js/360view.js"></script> --}}
<script>
    function toggleDetails(id) {
      const detailContainer = document.getElementById(id);
      detailContainer.classList.toggle('active');
    }
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
<script>
    function clearProductSession() {
        sessionStorage.removeItem('mainProductID');
        sessionStorage.removeItem('relatedProductID');
    }
</script>
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
@endpush