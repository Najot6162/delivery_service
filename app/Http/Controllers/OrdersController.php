<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResourse;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class OrdersController extends Controller
{


    public function showCourier()
    {
        $order = Order::select('courier_name', Order::raw('count(*) as total'))->orderBy('total', 'desc')->groupBy('courier_name')->get();
        return OrderResourse::collection($order);
    }

    public function soldProductCount()
    {

        $products = Product::withSum('orders', 'order_product.quantity')->get();
        return OrderResourse::collection($products);
    }

    public function soldCountryCount()
    {
        $order = Order::select('address', Order::raw('count(*) as total'))->orderBy('total', 'desc')->groupBy('address')->get();
        return OrderResourse::collection($order);
    }

    public function showDeliveryOrders()
    {
        $order = Order::with('products')->where('status', 'yetkazilmoqda')->orWhere('status', 'tayyorlanmoqda')->paginate(5);
        $current_date = Carbon::now()->toDateTimeString();
        for ($i = 0; $i < count($order); $i++) {
            $start_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order[$i]->updated_at);
            $end_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $current_date);
            $different_days = $start_date->diffForHumans($end_date);;
            $order[$i]->arrival_time = $different_days;
        }
        return OrderResourse::collection($order);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return OrderResourse
     */
    public function updateOrderStatus(Request $request, $id)
    {
        $request->validate([
            'status' => ['required', Rule::in(['tayyorlanmoqda', 'yetkazilmoqda', 'yetkazildi'])]
        ]);
        $order = Order::findOrFail($id);
        $order->status = $request->status;

        if ($order->save()) {
            return "order status updated successfully";
        }
    }

}
