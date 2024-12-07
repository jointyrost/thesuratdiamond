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
                <h1>Add Blog</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Blog</h3>
                        <div class="card-tools p-0">
                            <a href="{{url('admin/blog')}}" class="btn btn-outline btn-md">Back</a>
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

                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Enter Blog Title">
                                @error('title')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Author Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Author Name">
                                @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="para1">Paragraph 1</label>
                                <textarea id="para1" name="para1" class="form-control" placeholder="Enter First Paragraph"></textarea>
                                @error('para1')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input type="text" id="heading" name="heading" class="form-control" placeholder="Enter Heading">
                                @error('heading')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="para2">Paragraph 2</label>
                                <textarea id="para2" name="para2" class="form-control" placeholder="Enter Second Paragraph"></textarea>
                                @error('para2')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="image1">Image 1</label>
                                <input type="file" class="form-control" id="image1" name="image1">
                                @error('image1')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="image2">Image 2</label>
                                <input type="file" class="form-control" id="image2" name="image2">
                                @error('image2')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="para3">Paragraph 3</label>
                                <textarea id="para3" name="para3" class="form-control" placeholder="Enter Third Paragraph"></textarea>
                                @error('para3')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea id="comment" name="comment" class="form-control" placeholder="Enter Comment"></textarea>
                                @error('comment')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@endpush
