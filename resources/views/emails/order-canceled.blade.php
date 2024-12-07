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
            color: #e74c3c;
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
        .refund-policy {
            background-color: #fff3cd;
            padding: 15px;
            border-left: 5px solid #f39c12;
            border-radius: 5px;
            font-size: 14px;
            color: #856404;
            margin-top: 20px;
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
        <p>We regret to inform you that your order (ID: {{ $order->id }}) has been canceled by our admin due to unforeseen circumstances. We sincerely apologize for any inconvenience this may have caused.</p>
        
        <div class="order-details">
            <p><strong>Order ID:</strong> {{ $order->id }}</p>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('F j, Y') }}</p>
            <!-- Add any other relevant order details here -->
        </div>

        <p>Your refund will be processed within 8 to 15 business days after deducting a small transaction charge as per our refund policy. We appreciate your patience during this time.</p>

        <div class="refund-policy">
            <strong>Refund Policy:</strong>
            <ul>
                <li>The refund will be processed within 8 to 15 business days.</li>
                <li>A transaction fee may apply as per our refund policy.</li>
                <li>If you have any questions, please contact our support team.</li>
            </ul>
        </div>

        <p>For further inquiries or if you need assistance, please don’t hesitate to reach out to our customer support team at <a href="mailto:support@thesuratdiamond.com">support@thesuratdiamond.com</a>.</p>

        <div class="button-container">
            <a href="https://thesuratdiamond.com" class="button">Visit Our Website</a>
        </div>

        <p>Thank you for understanding, and we hope to serve you again in the future.</p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} The Surat Diamond. All rights reserved.</p>
            <p>Mini Hira Bazar, Varachha, Surat, Gujarat, India</p>
        </div>
    </div>
</body>
</html>
