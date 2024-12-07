<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to {{ config('app.name') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .header {
            text-align: center;
            background-color: #01204E;
            color: #ffffff;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        .header img {
            max-width: 150px;
            margin-bottom: 10px;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            font-size: 24px;
            color: #01204E;
        }
        .content p {
            font-size: 16px;
            line-height: 1.5;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header Section -->
    <div class="header">
        <img src="{{ asset('user/assets/images/logo.png') }}" alt="Company Logo">
        <h2>Welcome to {{ config('app.name') }}</h2>
    </div>

    <!-- Content Section -->
    <div class="content">
        {{-- <h2>Hello, {{ $user->name }}!</h2> --}}
        <p>Thank you for contacting {{ config('app.name') }}! We’re thrilled to have you with us. You now have access to all our features and services. Here’s what you can expect:</p>

        <ul>
            <li><strong>Exclusive Offers:</strong> Stay tuned for special offers just for our members.</li>
            <li><strong>24/7 Support:</strong> We’re here to help you anytime.</li>
        </ul>

        <p>We’re glad to have you on board!</p>
        <a href="{{ config('app.url') }}" class="btn">Visit Our Website</a>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>Thanks,</p>
        <p>{{ config('app.name') }} Team</p>
    </div>
</div>

</body>
</html>
