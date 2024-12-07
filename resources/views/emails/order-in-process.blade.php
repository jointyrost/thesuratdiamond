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
    </style>
</head>
<body>
    <div class="container">
        <h2>The Surat Diamond</h2>
        <p>Dear {{ $order->user->name }},</p>
        <p>We’re pleased to inform you that your order is now in process. Our team is carefully preparing your items with attention to detail to ensure the finest quality.</p>
        
        <div class="order-details">
            <p><strong>Order ID:</strong> {{ $order->id }}</p>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('F j, Y') }}</p>
            <!-- Add any other relevant order details here -->
        </div>

        <p>Once your order is ready for dispatch, we’ll send you an update with the shipping information. In the meantime, if you have any questions or require assistance, please don’t hesitate to reach out to us.</p>
        
        <p>For support, contact us at <a href="mailto:support@thesuratdiamond.com">support@thesuratdiamond.com</a>.</p>

        <div class="button-container">
            <a href="https://thesuratdiamond.com" class="button">Visit Our Website</a>
        </div>

        <p>Thank you for choosing The Surat Diamond. We’re excited to get your order ready and delivered to you soon!</p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} The Surat Diamond. All rights reserved.</p>
            <p>Mini Hira Bazar, Varachha, Surat, Gujarat, India</p>
        </div>
    </div>
</body>
</html>
