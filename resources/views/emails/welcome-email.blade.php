<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Community</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        /* Header */
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #eee;
        }

        .header h1 {
            color: #0056b3;
            font-size: 28px;
            margin: 0;
        }

        /* Content */
        .content {
            text-align: center;
            margin-top: 20px;
            line-height: 1.6;
        }

        .content p {
            font-size: 16px;
            color: #555;
        }

        /* Highlighted OTP */
        .otp {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            background-color: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 15px;
        }

        /* Button */
        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Footer */
        .footer {
            text-align: center;
            font-size: 14px;
            color: #999;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header -->
    <div class="header">
        <h1>Welcome to Our Community!</h1>
    </div>

    <!-- Content -->
    <div class="content">
        <p>Hello and thank you for joining us at {{ config('app.name') }}! We’re thrilled to have you with us.</p>
        <p>Here’s what you can expect:</p>
        <ul style="list-style-type: none; padding: 0;">
            <li>💎 Access to exclusive content and offers</li>
            <li>💬 24/7 customer support</li>
            <li>🌟 Member-only events and updates</li>
        </ul>

        
        <!-- Call-to-Action Button -->
        <div>
            <a href="{{ config('app.url') }}" class="btn">Get Started</a>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>If you have any questions, feel free to reach out to us at support@thesuratdiamond.com.</p>
        <p>Thanks, The {{ config('app.name') }} Team</p>
    </div>
</div>

</body>
</html>
