@extends('layouts.admin')

@push('styles')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endpush

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Order List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Orders</h3>
                    </div>
                    <div class="card-body">
                        <table id="ordersTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Total Amount</th>
                                    <th>Order Date</th>
                                    <th>Deleviry Date</th>
                                    <th>Status</th>
                                    <th>Tracking ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->email }}</td>
                                    <td>@if ($order['payment_currency'] === "USD")$@else₹@endif
                                        {{ $order->total }}</td>
                                    <td>{{ $order->created_at->format('j M Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($order->delivery_date)->format('j M Y') }}</td>
                                    <td>
                                        <span  class="badge {{ $order->status == 'completed' ? 'badge-success' : 'badge-warning' }}" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#exampleModal"
                                                data-order-id="{{ $order->id }}" 
                                                style="cursor: pointer;"
                                                onclick="setOrderId({{ $order->id }})">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                        
                                    <td>{{ $order->track_id ?? 'N/A' }}</td>
                                    <td>
                                        <button id="view-orderitems-btn" class="btn btn-primary btn-sm" data-bs-toggle="modal" 
                                        data-bs-target="#view-orders-modal"
                                        data-order-id="{{ $order->id }}" >View items</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                    <div class="mb-3">
                    <label for="status" class="col-form-label">Change Status of Order:</label>
                    <select name="status" id="status" class="form-select" aria-label="Default select example">
                        <option value="processing">processing</option>
                        <option value="pending">Pending</option>
                        <option value="shipped">Shipped</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="track_id" class="col-form-label">Type Track Id:</label>
                    <input type="text" class="form-control" name="track_id" id="track_id"></input>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="change-status" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    {{-- this is order view moddel --}}

    <!-- Vertically centered modal -->

    <div class="modal fade"   id="view-orders-modal" tabindex="-1" aria-labelledby="view-orders-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Products Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <table class="table table-bordered table-Secondary">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Name</th>
                                    <th>Product Type</th>
                                    <th>Ring Size</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
  <!-- Vertically centered scrollable modal -->
  
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
// Initialize DataTable
$(function () {
    $("#ordersTable").DataTable();
});

// Set the order ID when opening the modal
function setOrderId(orderId) {
    $('#change-status').data('order-id', orderId); // Store orderId in the button
}


// Handle form submission for changing the order status
$('#change-status').on('click', function() {
    // Capture the latest values of status and tracking ID when the button is clicked
    let orderId = $(this).data('order-id'); // Get orderId from the button
    let status = $('#status').val(); // Get selected status (ensuring fresh value each time)
    let trackId = $('#track_id').val(); // Get tracking ID (ensuring fresh value each time)

    

    // Send AJAX request to update the order status
    $.ajax({
        url: '/admin/orders/' + orderId,
        method: 'PUT',
        data: {
            status: status,
            tracking_id: trackId,
            _token: '{{ csrf_token() }}' // Include CSRF token for security
        },
        success: function(response) {
            $('#exampleModal').modal('hide'); // Hide the modal
            $('#exampleModal').modal('hide'); // Hide the modal
            toastr.success(response.message); // Show success message
        },
        error: function(xhr) {
            toastr.error(xhr.responseJSON.message);
        }
    });
});




</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Listen for clicks on any button with the class "view-orderitems-btn"
        document.querySelectorAll('.btn[data-bs-target="#view-orders-modal"]').forEach(button => {
            button.addEventListener('click', function () {
                // Get the order ID from the data attribute
                const orderId = this.getAttribute('data-order-id');
                
                // Make an AJAX request to get the order items
                fetch(`/admin/order-items/${orderId}`)  // Assuming your route is set up to get order items by order ID
                    .then(response => response.json())
                    .then(data => {
                        // Clear previous rows in the modal table
                        const tbody = document.querySelector('#view-orders-modal tbody');
                        tbody.innerHTML = '';  // Reset table body content
    
                        // Populate table rows with order items
                        data.orderItems.forEach(item => {
                            const row = document.createElement('tr');
                            const adjustedProductType = item.product_type === 'jewellery' ? 'jewelleries' : item.product_type;
                            row.innerHTML = `
                                <td>${item.product_id}</td>
                                <td>${item.product.name || 'N/A'}</td>
                                <td>${item.product_type}</td>
                                <td>${item.ring_size}</td>
                                <td>${item.quantity}</td>
                                <td>${item.price}</td>
                                <td>
                                    <button type="button" 
                                    class="btn btn-outline-dark" 
                                    onclick="window.location.href='/admin/${adjustedProductType}/${item.product_id}'">
                                        View Product</button>
                                </td>
                            `;
                            tbody.appendChild(row);
                        });
                    })
                    .catch(error => console.error('Error fetching order items:', error));
            });
        });
    });
</script>
    

@endpush
