<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        .email-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .email-header img {
            max-width: 200px;
            height: auto;
        }

        .email-header h2 {
            color: #2a2a2a;
            font-size: 24px;
            margin-top: 10px;
        }

        .email-content p {
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
        }

        .email-content strong {
            color: #2d87f0;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }

        .footer a {
            color: #2d87f0;
            text-decoration: none;
        }

        .border-top {
            border-top: 2px solid #2d87f0;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="email-container">
        <!-- Email Header -->
        <div class="email-header">
            <img src="https://yt3.googleusercontent.com/ytc/AIdro_n9Wrrd23vL8_Ml-ZuxgNqA5F97MO_8trdSutivkCLVXz4=s160-c-k-c0x00ffffff-no-rj" alt="Company Logo">
            <h2>{{ config('app.name') }}</h2>
        </div>

        <!-- Email Content -->
        <div class="email-content">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $data['message'] }}</p>
        </div>

        <!-- Border Top -->
        <div class="border-top"></div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p><a href="{{ url('/') }}">Visit Our Website</a></p>
        </div>
    </div>

</body>
</html>
