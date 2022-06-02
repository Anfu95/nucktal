<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{

    public function payment(Order $order)
    {
        $items = json_decode($order->content);

        return view('orders.payment', compact('order', 'items'));
    }
}
