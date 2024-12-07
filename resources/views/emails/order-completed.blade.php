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
            color: #28a745;
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
        <h2>The Surat Diamond - Order Completed</h2>
        <p>Dear {{ $order->user->name }},</p>
        <p>We are thrilled to inform you that your order (Order ID: <span class="highlight">{{ $order->id }}</span>) has been successfully completed and is now on its way to you!</p>
        
        <div class="order-details">
            <p><strong>Order ID:</strong> {{ $order->id }}</p>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('F j, Y') }}</p>
            <p><strong>Shipping Address:</strong> {{ $order->shipping_address }}</p>
            <p><strong>Total Amount:</strong> ₹{{ number_format($order->total_amount, 2) }}</p>
            <!-- You can add other order details such as items purchased here -->
        </div>

        <p>Your diamond jewelry pieces are carefully packed and dispatched with love. We hope you enjoy wearing them and feel the luxury they bring. Should you need any assistance with your order, please don’t hesitate to contact us.</p>

        <p><strong>Expected Delivery:</strong> Your order will reach you within the next 3 to 5 business days, depending on your location.</p>

        <div class="button-container">
            <a href="https://thesuratdiamond.com" class="button">Visit Our Website</a>
        </div>

        <p>If you have any questions or need further assistance, our customer support team is always here to help. Contact us at <a href="mailto:support@thesuratdiamond.com">support@thesuratdiamond.com</a>.</p>

        <p>Thank you for choosing The Surat Diamond. We look forward to serving you again with our finest selection of diamonds and jewelry.</p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} The Surat Diamond. All rights reserved.</p>
            <p>Mini Hira Bazar, Varachha, Surat, Gujarat, India</p>
        </div>
    </div>
</body>
</html>
