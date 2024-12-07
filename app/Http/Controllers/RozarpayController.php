<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;

class RozarpayController extends Controller
{
    public function createOrder(Request $request)
    {
        // dd($request);
        $api = new Api(env('ROZARPAY_KEY'), env('ROZARPAY_SECRET'));
        // $api = new Api(env('ROZARPAY_KEY'), env('ROZARPAY_SECRET'));


        $order_id = $request->input('order_id');
        $amount = $request->input('total_amount') * 100;
        $payment_method = $request->input('payment_method');



        $order = $api->order->create([
            'receipt' => 'receipt_' . uniqid(),
            'amount' => $amount,
            'currency' => 'INR',
        ]);


        $payment = new Payment();
        $user = auth()->user();

        $payment->payment_order_id = $order['id'];
        $payment->order_id = $order_id;
        $payment->amount = $amount;
        $payment->currency = 'INR';
        $payment->payer_name = $user['name'];
        $payment->payer_email = $user['email'];
        $payment->payment_method =  $payment_method;
        $payment->payment_status =  'pending';
        $payment->save();

        $data = [
            'order_id' => $order['id'],
            'amount' => $amount,
            'key' => env('ROZARPAY_KEY'),
            'name' => $user['name'],
            'email' => $user['email'],
            'phone' => $user['phone'],

        ];

        // dd($data);

        return view('payment.razorpay-checkout', ['data' => $data]);
        // return response()->json([
        //     'order_id' => $order['id'],
        //     'amount' => $amount,
        //     'key' => env('ROZARPAY_KEY'),
        //     'name' => $user['name'],
        //     'email' => $user['email'],
        //     'phone' => $user['phone'],


        // ]);
    }

    public function paymentCallback(Request $request)
    {

        $paymentId = $request->razorpay_payment_id;
        $orderId = $request->razorpay_order_id;


        $payment = Payment::where('payment_order_id', $orderId)->first();
        if ($payment) {
            $order = Order::where('id', $payment->order_id)->first();
        }
        if ($payment) {
            $payment->payment_id = $paymentId;
            $payment->payment_status = 'paid';
            $payment->save();

            $order->payment_status = 'paid';
            $order->save();

            return response()->json(['status' => 'success']);
        } else {
            $payment = new Payment();
            $payment->payment_order_id = $orderId;
            $payment->payment_status = 'failed';
            $payment->save();
        }

        return response()->json(['status' => 'failure']);
    }
}
