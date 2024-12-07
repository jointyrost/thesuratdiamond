@push('styles')
   
@endpush
@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blogs</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Blog Posts</h3>
                        <div class="card-tools p-0">
                            <a href="{{ url('admin/blogs/create') }}" class="btn btn-primary btn-md">Create</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->name }}</td>
                                    <td>{{ $blog->category }}</td>
                                    <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-folder"></i> View
                                        </a>
                                        
                                        <a href="{{ route('blogs.destroy', $blog->id) }}" class="btn btn-danger btn-sm"
                                            onclick="event.preventDefault(); document.getElementById('destroy-blog-{{ $blog->id }}').submit();">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
                                        <form id="destroy-blog-{{ $blog->id }}" action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')
 
@endpush