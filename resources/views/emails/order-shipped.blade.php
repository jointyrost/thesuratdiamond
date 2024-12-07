<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #007bff;
            text-align: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        p { color: #555; line-height: 1.6; }
        .order-details {
            font-size: 16px;
            color: #333;
            margin: 20px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .footer {
            font-size: 12px;
            text-align: center;
            color: #888;
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .highlight {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>The Surat Diamond - Order Shipped</h2>
        <p>Dear {{ $order->user->name }},</p>
        <p>We are excited to inform you that your order (Order ID: <span class="highlight">{{ $order->id }}</span>) has been shipped and is on its way to you!</p>
        
        <div class="order-details">
            <p><strong>Order ID:</strong> {{ $order->id }}</p>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('F j, Y') }}</p>
            <p><strong>Shipping Address:</strong></p>
            <p>{{ $order->street_address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->country->name }}</p>
            
            <p><strong>Tracking Number:</strong> {{ $order->track_id }}</p>
            <!-- Add any other shipping or order details as needed -->
            <p><strong>Expected Delivery Date:</strong> {{ \Carbon\Carbon::parse($order->delivery_date)->format('F j, Y') }}</p>
        </div>

        <p>Your diamond jewelry pieces are now on their way and will be arriving soon! You can track your shipment using the tracking number provided above.</p>

        <p><strong>Expected Delivery:</strong> Your order will reach you within the next 3 to 5 business days, depending on your location.</p>

        <div class="button-container">
            <a href="https://thesuratdiamond.com" class="button">Visit Our Website</a>
        </div>

        <p>If you have any questions or need assistance with your order, feel free to reach out to us at <a href="mailto:support@thesuratdiamond.com">support@thesuratdiamond.com</a>. We’re happy to help!</p>

        <p>Thank you for choosing The Surat Diamond. We’re thrilled that your jewelry pieces are on their way to you, and we can’t wait for you to enjoy them!</p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} The Surat Diamond. All rights reserved.</p>
            <p>Mini Hira Bazar, Varachha, Surat, Gujarat, India</p>
        </div>
    </div>
</body>
</html>
