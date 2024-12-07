@extends('layouts.main')
@section('content')
<main class="main-wrapper p-5" style="background: #eee;">
        
    <div class="container">
        <div class="row">
            <div class="header">
                Razorpay Checkout Page
                    <div class="col-md-6">

                        <div class="form-group row">
                            <p><strong>Oder id</strong>{{$data['order_id']}}</p>
                            <p><strong>Amount</strong>{{$data['amount']}}</p>
                        </div>
                        <button id="rzp-button1" class="btn btn-primary">pay now</button>
                </div>
            </div>
        </div>
    </div>

 
</main>
@endsection
@push('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_M2EkLjsjHzpcGW", // Enter the Key ID generated from the Dashboard
    "amount": "1000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp", //your business name
    "description": "Test Transaction",
    "image": "https://yt3.googleusercontent.com/ytc/AIdro_n9Wrrd23vL8_Ml-ZuxgNqA5F97MO_8trdSutivkCLVXz4=s160-c-k-c0x00ffffff-no-rj",
    "order_id": "{{$data['order_id']}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        console.log(response);
    },
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information, especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com", 
        "contact": "9000090000"  //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
@endpush