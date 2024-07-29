<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends Controller
{
    /**
     * Get the order history for the authenticated customer.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrderHistory()
    {
        $customer = Auth::user(); // Mengambil customer yang sedang login

        // Ambil data order berdasarkan customer_id
        $orders = Order::where('customer_id', $customer->customer_id)
            ->select('id as order_id', 'created_at as order_date', 'table_number', 'total_price')
            ->get();

        return response()->json($orders);
    }

    /**
     * Get the detail of a specific order for the authenticated customer.
     *
     * @param int $order_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrderDetail($order_id)
    {
        $customer = Auth::user(); // Mengambil customer yang sedang login

        // Ambil detail order berdasarkan order_id dan customer_id
        $order = Order::where('id', $order_id)
            ->where('customer_id', $customer->customer_id)
            ->with('orderItems.menuItem') // Asumsikan ada relasi orderItems dan menuItem
            ->first();

        if (!$order) {
            return response()->json(['message' => 'Order not found or not accessible'], 404);
        }

        return response()->json($order);
    }
}
