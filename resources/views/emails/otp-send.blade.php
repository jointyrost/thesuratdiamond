<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f7f7f7;
        }
        h2 {
            color: #333;
        }
        .otp {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            padding: 10px 20px;
            background-color: #e0e7ff;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hello, {{ $user->name }}</h2>
        <p>Your OTP code is:</p>
        <p class="otp">{{ $otp->otp }}</p>
        <p>Please enter this code to verify your email address.</p>
        <p>Thank you,<br>{{ config('app.name') }} Team</p>
    </div>
</body>
</html>
