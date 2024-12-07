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
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Jewellery Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 form-group">
                                    <label>Name: <b>{{ $jewellery->name }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Product ID: <b>{{ $jewellery->product_id }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Category ID: <b>{{ $jewellery->category_id }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Price: <b>${{ number_format($jewellery->price, 2) }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Gross Weight: <b>{{ $jewellery->gross_weight }}g</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Size: <b>{{ $jewellery->size }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Gender: <b>{{ $jewellery->gender }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Occasion: <b>{{ $jewellery->occasion }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Material Color: <b>{{ $jewellery->material_color }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Jewellery Type: <b>{{ $jewellery->jewellery_type }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Diamond Clarity: <b>{{ $jewellery->diamond_clarity }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Diamond Color: <b>{{ $jewellery->diamond_color }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Diamond Weight: <b>{{ $jewellery->diamond_weight }}ct</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>No. of Diamonds: <b>{{ $jewellery->no_of_diamonds }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Diamond Shape: <b>{{ $jewellery->diamond_shape }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Diamond Setting: <b>{{ $jewellery->diamond_setting }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Diamond Price: <b>${{ number_format($jewellery->diamond_price, 2) }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Metal: <b>{{ $jewellery->metal }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Gold Purity: <b>{{ $jewellery->gold_purity }}%</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Gold Price per Gram: <b>${{ number_format($jewellery->gold_price_per_gram, 2) }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Gold Weight in Grams: <b>{{ $jewellery->gold_weight_in_gm }}g</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Making Charge: <b>${{ number_format($jewellery->making_charge, 2) }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>GST: <b>${{ number_format($jewellery->gst, 2) }}</b></label>
                                </div>
                                <div class="col-4 form-group">
                                    <label>Description: <b>{{ $jewellery->description }}</b></label>
                                </div>
                                <div class="card-header ">
                                    <h3 class="card-title">Product Images</h3>
                                </div>
                                <div class="row">
                                    @foreach($jewellery->images as $image)
                                        <div class="col-4 form-group mt-2">
                                            <label>Image:</label>
                                            <img style="min-width: 200px" src="{{ asset('storage/' . $image->image_path) }}" width="100px" class="img-responsive" />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('jewelleries.index') }}" class="btn btn-primary">Back to List</a>
                            <a href="{{ route('jewelleries.edit', $jewellery->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('jewelleries.destroy', $jewellery->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
