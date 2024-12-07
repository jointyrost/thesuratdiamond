@push('styles')
   
@endpush
@extends('layouts.admin')

@section('content')
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>diamond</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">diamond</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">diamonds</h3>
                <div class="card-tools p-0">
                    <a href="{{url('admin/diamond/create')}}" class="btn btn-primary btn-md">Create</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>stone Type</th>
                            <th>Stone Info</th>
                            {{-- <th>Setting/Stone Image</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($diamonds as $diamond)
                          <tr>
                            <td>{{$diamond->name}}</td>
                            <td>
                              <div class="col-7">
                                <p class="text-muted text-sm mb-0"><b>Stone Type: </b> {{$diamond->stoneType}}</p>
                              </div>
                            </td>
                            <td>
                              <div class="col-7">
                                <p class="text-muted text-sm mb-0"><b>Stone Type: </b> {{$diamond->diamond_category}}</p>
                              </div>
                            </td>
                            <td>
                              <div class="col-7">
                                <p class="text-muted text-sm mb-0"><b>Product Id: </b> {{$diamond->product_id}}</p>
                              </div>
                            </td>
                            {{-- <td>
                              @if($diamond->stoneType == 'lab-grown-diamond')
                              <div class="col-7">
                                <p class="text-muted text-sm mb-0"><b>Stone Type: </b> {{$diamond->stoneType}}</p>
                                <p class="text-muted text-sm mb-0"><b>Shape: </b> {{$diamond->stone_shape_type}}</p>
                                <p class="text-muted text-sm mb-0"><b>Carat: </b> {{$diamond->stone_carat}}</p>
                                <p class="text-muted text-sm mb-0"><b>Price: </b>  {{$diamond->stone_price}}</p>
                                <p class="text-muted text-sm mb-0"><b>Colour: </b>  {{$diamond->stone_color}}</p>
                                <p class="text-muted text-sm mb-0"><b>Cut: </b>     {{$diamond->stone_cut}}</p>
                                <p class="text-muted text-sm mb-0"><b>Clarity: </b>  {{$diamond->stone_clarity}}</p>
                                <p class="text-muted text-sm mb-0"><b>Depth %: </b>  {{$diamond->product}}</p>
                                <p class="text-muted text-sm mb-0"><b>Table %: </b>  {{$diamond->stone_table}}</p>
                                <p class="text-muted text-sm mb-0"><b>Length/Width Ratio: </b>  {{$diamond->stone_ratio}}</p>
                              </div>
                              @elseif ($diamond->stoneType == 'coloured-lab-grown-diamond')
                                <div class="col-7">
                                  <p class="text-muted text-sm mb-0"><b>Stone Type: </b> {{$diamond->stoneType}}</p>
                                  <p class="text-muted text-sm mb-0"><b>Shape: </b> {{$diamond->stone_shape_type}}</p>
                                  <p class="text-muted text-sm mb-0"><b>Colour: </b>  {{$diamond->stone_color}}</p>
                                  <p class="text-muted text-sm mb-0"><b>Clarity: </b>  {{$diamond->stone_clarity}}</p> 
                                </div>
                              @elseif ($diamond->stoneType == 'moissanite')
                              <div class="col-7">
                                <p class="text-muted text-sm mb-0"><b>Stone Type: </b> {{$diamond->stoneType}}</p> 
                                <p class="text-muted text-sm mb-0"><b>Colour: </b>  {{$diamond->stone_color}}</p>  
                              </div>
                              @elseif ($diamond->stoneType == 'sapphire')
                              <div class="col-7">
                                <p class="text-muted text-sm mb-0"><b>Stone Type: </b>{{$diamond->stoneType}}</p> 
                                <p class="text-muted text-sm mb-0"><b>Colour: </b>  {{$diamond->stone_color}}</p>  
                              </div>
                              @endif
                            </td> --}}
                            {{-- <td> 
                               
                              <div class="row">
                                  <div class="col-5  text-center">
                                    <img src="{{ asset('storage/'.$diamond->setting_image) }}" alt="user-avatar" class="img-circle" style="max-width: 80px; max-height: 80px;">
                                   </div>
                                  <div class="col-5 text-center">
                                    <img src="{{url('storage/'.$diamond->stone_image)}}" alt="user-avatar" class="img-circle " style="max-width: 80px; max-height: 80px;">
                                  </div>
                                </div>
                            </td> --}}
                            <td >
                              <a href="{{ route('diamond.show', $diamond->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-folder"> </i> View</a>
                              <a href="{{ route('diamond.edit', $diamond->id) }}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                              <a href="{{ route('diamond.destroy', $diamond->id) }}" class="btn btn-danger btn-sm"
                                        onclick="event.preventDefault();   document.getElementById('destroy-user').submit();">
                                        <i class="fas fa-trash"></i> Delete</a>
                                <form id="destroy-user" action="{{ route('diamond.destroy', $diamond->id) }}" method="POST" style="display: none;">
                                  @csrf
                                  @method('DELETE')
                              </form>

                              
                               
                            </td>
                        </tr>
                      @endforeach 
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Rendediamond engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div> 
    </section>
@endsection
@push('scripts')
 
@endpush