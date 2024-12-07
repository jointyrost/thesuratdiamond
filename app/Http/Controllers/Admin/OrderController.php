<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\Order\PaymentController;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems')
            ->where('payment_status', 'paid')
            ->get();

        // dd($orders);
        return view('admin.orders.index', compact('orders'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $status = $request->input('status');
        $tracking_id = $request->input('tracking_id');

        if ($status) {
            $order->status = $status;
        }
        if ($tracking_id) {
            $order->track_id = $tracking_id;
        }
        $order->save();

        if ($status) {

            // Get the user associated with the order
            $user = $order->user;

            // Instantiate PaymentController
            $paymentController = new PaymentController();

            // Call sendOrderEmail based on the status
            switch ($status) {
                case 'processing':
                    $paymentController->sendOrderEmail($user, $order, 'in_process');
                    break;
                case 'completed':
                    $paymentController->sendOrderEmail($user, $order, 'completed');
                    break;
                case 'shipped':
                    // Assume there is a specific view/template for shipped orders if needed
                    $paymentController->sendOrderEmail($user, $order, 'shipped');
                    break;
                case 'cancelled':
                    $paymentController->sendOrderEmail($user, $order, 'canceled');
                    break;
                default:
                    break;
            }
        }



        return response()->json(['message' => 'Order status updated successfully']);
    }
}
