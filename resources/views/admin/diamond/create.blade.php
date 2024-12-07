@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Diamond</h3>
                        <div class="card-tools p-0">
                            <a href="{{url('admin/diamond')}}" class="btn btn-outline btn-md">Back</a>
                        </div> 
                    </div>
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div id="message"></div>
                    <!-- /.card-header -->
                    <!-- form start -->
                   
                    <form action="{{ route('diamond.store') }}" method="POST"  id="diamondStore"  enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="col-4 form-group">
                            <label for="stoneType">Diamond Type</label>
                            <select class="custom-select rounded-0" id="stoneType" name="stoneType" onchange="updateFormFields()">
                              <option value="">Select Stone Type</option>
                              @foreach ($stone_types as $row)
                              <option value="{{ \Str::slug($row->name)}}">{{$row->name}}</option>
                              @endforeach
                            </select>
                             @error('diamond_type')
                                  <div class="text-danger">{{ $message }}</div>
                             @enderror
                             <span id="diamond_type-error" class="invalid-feedback"></span>
                          </div>
                          <div class="row" id="additionalFields"></div>
                          
                        
                        
                        <div class="row">
                             
                            <div class="col-4 form-group ">
                                <label for="exampleSelectRounded0">Name </label>
                                <input type="text"  id="name" name="name"  class="form-control" placeholder="Enter Name" /> 
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <span id="name-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="product_id">Product ID</label>
                                <input type="text" class="form-control" name="product_id" id="product_id" placeholder="Enter Product ID">
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
                            

                            <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Shape </label>
                                <select class="custom-select rounded-0" id="shape" name="shape">
                                    @foreach ($shapes as $row)
                                    <option value="{{$row->name}}">{{$row->name}}</option>
                                    @endforeach
                                  
                                </select>
                                @error('shape')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <span id="shape-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="color_category">Color Category</label>
                                <select class="custom-select rounded-0" id="color_category" name="color_category" onchange="updateColorCategory()">
                                    <option value="">Select Option</option>
                                    <option value="d_to_z">D to Z</option>
                                    <option value="general">General</option>
                                    <option value="fancy">Fancy</option>
                                    <option value="treated">Treated</option>
                                </select>
                                <span id="stone_clarity-error" class="invalid-feedback"></span>
                            </div>
                            
                            <div class="col-4 form-group" id="dynamic_inputs" style="display: none;">
                                <!-- D to Z -->
                                <div id="d_to_z_input" style="display: none;">
                                    <label for="d_to_z_selection">D to Z Selection</label>
                                    <select class="custom-select rounded-0" id="d_to_z_selection" name="d_to_z_selection">
                                        <option value="">Select Option</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                        <option value="I">I</option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N</option>
                                        <option value="O">O</option>
                                        <option value="P">P</option>
                                        <option value="Q">Q</option>
                                        <option value="R">R</option>
                                        <option value="S">S</option>
                                        <option value="T">T</option>
                                        <option value="U">U</option>
                                        <option value="V">V</option>
                                        <option value="W">W</option>
                                        <option value="X">X</option>
                                        <option value="Y">Y</option>
                                        <option value="Z">Z</option>
                                    </select>
                                    <span id="stone_clarity-error" class="invalid-feedback"></span>
                                </div>
                            
                                <!-- General -->
                                <div id="general_input" style="display: none;">
                                    <label for="general_options">General Options</label>
                                    <select class="custom-select rounded-0" id="general_options" name="general_options">
                                        <option value="">Select Option</option>
                                        <option value="white">White</option>
                                        <option value="owc-1st-shade">OWC (1st Shade)</option>
                                        <option value="ttlc-2nd-shade">TTLC (2nd Shade)</option>
                                        <option value="tlc-3rd-shade">TLC (3rd Shade)</option>
                                        <option value="lc-4th-shade">LC (4th Shade)</option>
                                        <option value="owb-1st-shade">OWB (1st Shade)</option>
                                        <option value="ttlb-2nd-shade">TTLB (2nd Shade)</option>
                                        <option value="tlb-3rd-shade">TLB (3rd Shade)</option>
                                        <option value="lb-4th-shade">LB (4th Shade)</option>
                                        <option value="db">DB</option>
                                        <option value="mix-tinge">Mix Tinge</option>
                                        <option value="black">Black</option>
                                    </select>
                                    <span id="stone_clarity-error" class="invalid-feedback"></span>
                                </div>
                            
                                <!-- Fancy -->
                                <div id="fancy_inputs" style="display: none;">
                                    <div>
                                        <label for="fancy_color">Fancy Color</label>
                                        <select class="custom-select rounded-0" id="fancy_color" name="fancy_color">
                                            <option value="">Select Option</option>
                                            <option value="black">Black</option>
                                            <option value="blue">Blue</option>
                                            <option value="brown">Brown</option>
                                            <option value="chameleon">Chameleon</option>
                                            <option value="champagne">Champagne</option>
                                            <option value="cognac">Cognac</option>
                                            <option value="gray">Gray</option>
                                            <option value="green">Green</option>
                                            <option value="orange">Orange</option>
                                            <option value="pink">Pink</option>
                                            <option value="purple">Purple</option>
                                            <option value="red">Red</option>
                                            <option value="violet">Violet</option>
                                            <option value="yellow">Yellow</option>
                                            <option value="white">White</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <span id="stone_clarity-error" class="invalid-feedback"></span>
                                    </div>
                                    <div>
                                        <label for="fancy_intensity">Fancy Intensity</label>
                                        <select class="custom-select rounded-0" id="fancy_intensity" name="fancy_intensity">
                                            <option value="">Select Option</option>
                                            <option value="faint">Faint</option>
                                            <option value="very_light">Very Light</option>
                                            <option value="light">Light</option>
                                            <option value="fancy_light">Fancy Light</option>
                                            <option value="fancy">Fancy</option>
                                            <option value="fancy_dark">Fancy Dark</option>
                                            <option value="fancy_intense">Fancy Intense</option>
                                            <option value="fancy_vivid">Fancy Vivid</option>
                                            <option value="fancy_deep">Fancy Deep</option>
                                        </select>
                                        <span id="stone_clarity-error" class="invalid-feedback"></span>
                                    </div>
                                </div>
                            
                                <!-- Treated -->
                                <div id="treated_input" style="display: none;">
                                    <label for="treated_color">Treated Color</label>
                                    <select class="custom-select rounded-0" id="treated_color" name="treated_color">
                                        <option value="">Select Option</option>
                                        <option value="black">Black</option>
                                        <option value="blue">Blue</option>
                                        <option value="brown">Brown</option>
                                        <option value="chameleon">Chameleon</option>
                                        <option value="champagne">Champagne</option>
                                        <option value="cognac">Cognac</option>
                                        <option value="gray">Gray</option>
                                        <option value="green">Green</option>
                                        <option value="orange">Orange</option>
                                        <option value="pink">Pink</option>
                                        <option value="purple">Purple</option>
                                        <option value="red">Red</option>
                                        <option value="violet">Violet</option>
                                        <option value="yellow">Yellow</option>
                                        <option value="white">White</option>
                                        <option value="colourless">Colourless</option>
                                        <option value="clover_green">Clover Green</option>
                                        <option value="smokey_grey">Smokey Grey</option>
                                        <option value="sunshine_yellow">Sunshine Yellow</option>
                                        <option value="champagne">Champagne</option>
                                        <option value="midnight_blue">Midnight Blue</option>
                                        <option value="seafoam_green">Seafoam Green</option>
                                        <option value="sandy_yellow">Sandy Yellow</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <span id="stone_clarity-error" class="invalid-feedback"></span>
                                </div>
                            </div>


                           
                            <div class="col-4 form-group">
                                <label for="price_per_carat">Price Per Carat</label><br/>
                                <input type="text" id="price_per_carat" name="price_per_carat" class="form-control"/>
                                <span id="price_per_carat-error" class="invalid-feedback"></span>
                            </div>
                            
                     
                            <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Stone User Price </label><br/>
                                <input type="text" id="stone_user_price" name="stone_user_price" class="form-control"/>
                                <span id="stone_user_price-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Stone Wholesaler Price </label><br/>
                                <input type="text" id="stone_wholesaler_price" name="stone_wholesaler_price" class="form-control"/>
                                <span id="stone_wholesaler_price-error" class="invalid-feedback"></span>
                            </div>
                            <div class="col-4 form-group">
                                <label for="exampleSelectRounded0">Image </label>
                                <input type="file" class="form-control" id="stone_image" name="stone_image" />
                                <span id="stone_image-error" class="invalid-feedback"></span>
                            </div>

                            

                        </div> 
                        
                        <div class="row" id="additionalStoneType"></div>
                        <div class="row" id="sizeOptionContainer"></div>
                        
                      </div>

                                
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </form>
                    
                  </div>
                </div>
                <!--/.col (left) -->
      
              </div>
        </div>
    </section>
@endsection
@push('scripts')
<script src="{{asset('admin/diamond-fields.js')}}"></script>
<script src="{{asset('admin/diamond-colour.js')}}"></script>
<script src="{{asset('admin/diamond-type.js')}}"></script>
<script src="{{asset('admin/diamond-size.js')}}"></script>
<script>
    $('#diamondStore').validate({
        rules: {
            stoneType: {
                required: true
            },
            process: {
                required: true
            },
            diamond_category: {
                required: false
            },
            size_type: {
                required: true
            },
            lab: {  
                required: true
            }
            generalSize: {
                required: true
            },
            sieveSize: {
                required: true
            },
            name: {
                required: true
            },
            product_id: {
                required: true
            },
            shape: {
                required: true
            },
            color_category: {
                required: true
            },
            d_to_z_selection: {
                required: true
            },
            general_options: {
                required: true
            },
            fancy_color: {
                required: true
            },
            fancy_intensity: {
                required: true
            },
            treated_color: {
                required: true
            },
            stone_clarity: {
                required: true
            },
            stone_carat: {
                required: true
            },
            natts: {
                required: true
            },
            bgm: {
                required: true
            },
            cut: {
                required: true
            },
            fluorescence: {
                required: true
            },
            length: {
                required: true
            },
            width: {
                required: true
            },
            depth: {
                required: true
            },
            price_per_carat: {
                required: true,
                number: true
            },
            stone_user_price: {
                required: true,
                number: true
            },
            stone_wholesaler_price: {
                required: true,
                number: true
            },
            stone_image: {
                required: true
            },
            terms: {
                required: true
            },
            remarks: {
                required: true
            }
        },
        messages: {
            stoneType: {
                required: 'This field is required'
            },
            process: {
                required: 'This field is required'
            },
            diamond_category: {
                required: 'This field is required'
            },
            size_type: {
                required: 'This field is required'
            },
            generalSize: {
                required: 'This field is required'
            },
            sieveSize: {
                required: 'This field is required'
            },
            name: {
                required: 'This field is required'
            },
            lab: {  
                required: 'This field is required'
            },
            product_id: {
                required: 'This field is required'
            },
            shape: {
                required: 'This field is required'
            },
            color_category: {
                required: 'This field is required'
            },
            d_to_z_selection: {
                required: 'This field is required'
            },
            general_options: {
                required: 'This field is required'
            },
            fancy_color: {
                required: 'This field is required'
            },
            fancy_intensity: {
                required: 'This field is required'
            },
            treated_color: {
                required: 'This field is required'
            },
            stone_clarity: {
                required: 'This field is required'
            },
            stone_carat: {
                required: 'This field is required'
            },
            natts: {
                required: 'This field is required'
            },
            bgm: {
                required: 'This field is required'
            },
            cut: {
                required: 'This field is required'
            },
            fluorescence: {
                required: 'This field is required'
            },
            length: {
                required: 'This field is required'
            },
            width: {
                required: 'This field is required'
            },
            depth: {
                required: 'This field is required'
            },
            price_per_carat: {
                required: 'This field is required',
                number: 'Enter a valid price'
            },
            stone_user_price: {
                required: 'This field is required',
                number: 'Enter a valid price'
            },
            stone_wholesaler_price: {
                required: 'This field is required',
                number: 'Enter a valid price'
            },
            stone_image: {
                required: 'This field is required'
            },
            terms: {
                required: 'This field is required'
            },
            remarks: {
                required: 'This field is required'
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {
            $("#loader").show();
            var formData = new FormData(form);
            $('#message').html('');
            $.ajax({
                url: $(form).attr('action'),
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $("#loader").hide();
                    if (response.success) {

                        
                        
                        
                        window.location.href = response.url;
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr) {
                    $("#loader").hide();
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#' + key).addClass('is-invalid');
                            $('#' + key + '-error').text(value);
                        });
                    } else {
                        console.error('Error:', xhr);
                    }
                }
            });
        }
    });
</script>

@endpush
