<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    public function show($order_id)
    {
        $orderItems = OrderItem::with('product')
            ->where('order_id', $order_id)
            ->get();

        return response()->json([
            'orderItems' => $orderItems
        ]);
    }
}
