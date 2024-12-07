@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Show Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Show Product</li>
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
                            <h3 class="card-title">Product Details</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 form-group">
                                    <label>Stone Type: <b>{{ $diamond->stoneType ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Diamond Category: <b>{{ $diamond->diamond_category ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Process: <b>{{ $diamond->process ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Name: <b>{{ $diamond->name ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Product ID: <b>{{ $diamond->product_id ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Shape: <b>{{ $diamond->shape ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Lab: <b>{{ $diamond->lab ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Color Category: <b>{{ $diamond->color_category ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>D to Z Selection: <b>{{ $diamond->d_to_z_selection ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>General Options: <b>{{ $diamond->general_options ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Fancy Color: <b>{{ $diamond->fancy_color ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Fancy Intensity: <b>{{ $diamond->fancy_intensity ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Treated Color: <b>{{ $diamond->treated_color ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Price per Carat: <b>{{ $diamond->price_per_carat ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>User Price: <b>{{ $diamond->stone_user_price ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Wholesaler Price: <b>{{ $diamond->stone_wholesaler_price ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Size Type: <b>{{ $diamond->size_type ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Clarity: <b>{{ $diamond->stone_clarity ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Carat: <b>{{ $diamond->stone_carat ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>NATTS: <b>{{ $diamond->natts ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Cut: <b>{{ $diamond->cut ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Polish: <b>{{ $diamond->polish ?? 'null' }}</b></label>
                                </div>
                                
                                <div class="col-4 form-group mt-2">
                                    <label>Symmetry: <b>{{ $diamond->symmetry ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Link: <b>{{ $diamond->link ?? 'null' }}</b></label>
                                </div>
                                
                                <div class="col-4 form-group mt-2">
                                    <label>Fluorescence: <b>{{ $diamond->fluorescence ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Length: <b>{{ $diamond->length ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Width: <b>{{ $diamond->width ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Depth: <b>{{ $diamond->depth ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Terms: <b>{{ $diamond->terms ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Remarks: <b>{{ $diamond->remarks ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>General Size: <b>{{ $diamond->generalSize ?? 'null' }}</b></label>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Stone Image: <b>{{ $diamond->stone_image ? '' : 'null' }}</b></label>
                                    @if($diamond->stone_image)
                                        <img src="{{ asset('storage/' . $diamond->stone_image) }}" width="100px" class="img-responsive" />
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col (left) -->
            </div>
        </div>
    </section>
@endsection
