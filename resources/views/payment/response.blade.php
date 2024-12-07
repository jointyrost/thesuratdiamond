<!doctype html>
<html class="no-js" lang="en"> 
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Coming Soon</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('user/assets/css/vendor/bootstrap.min.css')}}">   
    <link rel="stylesheet" href="{{asset('user/assets/css/style.min.css')}}"> 
    <style>
        ._failed{ border-bottom: solid 4px red !important; }
._failed i{  color:red !important;  }

._success {
    box-shadow: 0 15px 25px #00000019;
    padding: 45px;
    width: 100%;
    text-align: center;
    margin: 40px auto;
    border-bottom: solid 4px #28a745;
}

._success i {
    font-size: 55px;
    color: #28a745;
}

._success h2 {
    margin-bottom: 12px;
    font-size: 40px;
    font-weight: 500;
    line-height: 1.2;
    /* margin-top: 10px; */
}

._success p {
    margin-bottom: 0px;
    font-size: 18px;
    color: #495057;
    font-weight: 500;
}
    </style>
</head> 
<body> 
    <div class="comming-soon-area">

        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-6">
                <div class="comming-soon-banner bg_image bg_image--13"></div>
            </div>
            <div class="col-lg-5 offset-xl-1">
                <div class="comming-soon-content">
                    <div class="brand-logo">
                        <img src="{{asset('user/assets/images/logo/large.png')}}" alt="Logo">
                    </div>  
                    <div class="row justify-content-center">
                       
                        <div style="max-width: 600px; margin: 0 auto; text-align: center;">
                            <img src="user/assets/images/icons/shape/round.svg"  style="width: 100px; margin-bottom: 20px;">
                            <h1>The Surat Diamond</h1>
                            
                            <h2>Payment Receipt</h2>
                            <p><strong>Name:</strong> {{ $data['name'] }}</p>
                            <p><strong>Email:</strong> {{ $data['email'] }}</p>
                            <p><strong>Order ID:</strong> {{ $data['order_id'] }}</p>
                            <p><strong>Payment ID:</strong> {{ $data['payment_id'] }}</p>
                            <p><strong>Contact:</strong> {{ $data['contact'] }}</p>
                            <p><strong>Amount:</strong> ₹{{ number_format($data['amount'] / 100, 2) }}</p>
                            <p><strong>Status:</strong> {{ $data['status'] }}</p>
                    
                            <button onclick="window.print()" style="margin-top: 20px; padding: 10px 20px; background-color: #3399cc; color: #fff; border: none; cursor: pointer;">
                                Print Receipt
                            </button>
                        </div>
                       
                          
                    </div> 
                </div>
                
            </div>
        </div>
    </div> 
   
</body>
 </html>