@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Show Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Show Blog</li>
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
                            <h3 class="card-title">Blog Details</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label>Title: <b>{{ $blog->title ?? 'N/A' }}</b></label>
                                </div>
                                <div class="col-6 form-group">
                                    <label>Name: <b>{{ $blog->name ?? 'N/A' }}</b></label>
                                </div>
                                <div class="col-12 form-group mt-2">
                                    <label>Paragraph 1:</label>
                                    <p>{{ $blog->para1 ?? 'N/A' }}</p>
                                </div>
                                <div class="col-6 form-group mt-2">
                                    <label>Comment: <b>{{ $blog->comment ?? 'N/A' }}</b></label>
                                </div>
                                <div class="col-6 form-group mt-2">
                                    <label>Heading: <b>{{ $blog->heading ?? 'N/A' }}</b></label>
                                </div>
                                <div class="col-12 form-group mt-2">
                                    <label>Paragraph 2:</label>
                                    <p>{{ $blog->para2 ?? 'N/A' }}</p>
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Image 1:</label>
                                    @if($blog->image1)
                                        <img src="{{ asset('storage/' . $blog->image1) }}" width="100px" class="img-responsive" />
                                    @else
                                        <p><b>N/A</b></p>
                                    @endif
                                </div>
                                <div class="col-4 form-group mt-2">
                                    <label>Image 2:</label>
                                    @if($blog->image2)
                                        <img src="{{ asset('storage/' . $blog->image2) }}" width="100px" class="img-responsive" />
                                    @else
                                        <p><b>N/A</b></p>
                                    @endif
                                </div>
                                <div class="col-12 form-group mt-2">
                                    <label>Paragraph 3:</label>
                                    <p>{{ $blog->para3 ?? 'N/A' }}</p>
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
