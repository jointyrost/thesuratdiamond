<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Surat Diamond</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('user/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.min.css') }}">
</head>
<body>
    <div class="container mt-5" style="max-width: 600px; border: 1px solid #000; padding: 20px; border-radius: 8px;">
        <div class="text-center mb-4">
            <img src="{{ asset('user/assets/images/logo/logo.png') }}" style="width: 100px; margin-bottom: 20px;">
            <h1>The Surat Diamond</h1>
            <h2 class="mb-4">Payment Receipt</h2>
        </div>
    
        <table class="table table-bordered">
            <tbody>
                <tr><th scope="row">Name:</th><td>{{ $data['name'] }}</td></tr>
                <tr><th scope="row">Email:</th><td>{{ $data['email'] }}</td></tr>
                <tr><th scope="row">Order ID:</th><td>{{ $data['order_id'] }}</td></tr>
                <tr><th scope="row">Payment ID:</th><td>{{ $data['payment_id'] ?? 'N/A' }}</td></tr>
                <tr><th scope="row">Contact:</th><td>{{ $data['contact'] }}</td></tr>
                <tr><th scope="row">Amount:</th><td>{{ $data['payment_currency'] === 'USD' ? '$' : '₹' }} {{ number_format($data['amount'], 2) }}</td></tr>
                <tr><th scope="row">Status:</th><td>{{ $data['status'] }}</td></tr>
                @if ($data['status'] == 'Failed')
                    <tr><th scope="row">Error Code:</th><td>{{ $data['code'] }}</td></tr>
                    <tr><th scope="row">Description:</th><td>{{ $data['description'] }}</td></tr>
                    <tr><th scope="row">Source:</th><td>{{ $data['source'] }}</td></tr>
                    <tr><th scope="row">Step:</th><td>{{ $data['step'] }}</td></tr>
                    <tr><th scope="row">Reason:</th><td>{{ $data['reason'] }}</td></tr>
                @endif
            </tbody>
        </table>
    
        <div class="text-center mt-4">
            <button onclick="window.print()" class="btn btn-primary">Print Receipt</button>
        </div>
    
        @if ($data['status'] == 'Paid')
        <p class="text-center mt-4" style="font-weight: bold;">
            Thank you for shopping with The Surat Diamond!
        </p>
        @endif
    </div>
</body>
</html>
