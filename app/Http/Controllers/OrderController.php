<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    //
    public $stripe_product_id = [1 => 'prod_Qzx947CpDgG8Pb', 2 => 'prod_QzxFQGpC1PCaEQ', 3 => 'prod_QzxGwOidXp9Qjj'];
    //    public $stripe_charge_id = [1 => 'price_1Q7xkR09xEQSPohYOThOGs4y', 2 => 'price_1Q7xjx09xEQSPohYpgpYIiaR', 3 => 'price_1Q7xjZ09xEQSPohYCtXbjHVE'];
    public $stripe_charge_id = [1 => 'price_1Q7xF009xEQSPohYlevEUMt3', 2 => 'price_1Q7xL709xEQSPohY73wrxCHQ', 3 => 'price_1Q7xM209xEQSPohYzkq5fux7'];

    public function index(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        $user = $request->user();
        $order = Order::create([
            'product_id' => $product->id,
            'user_id' => $user->id,
            'quantity' => 1,
            'total_price' => $product->price,
            'order_number' => time(),
            'customer_address' => '123 Main St',
            'status' => 1,
            'payment_type' => 1,
            'payment_status' => 1,
            'payment_reference' => uniqid(),
        ]);

        //  $st_product_id = $this->stripe_product_id[$product->id];
        $st_price_id = $this->stripe_charge_id[$product->id];

        $quantity = 1;
        return $request->user()
            ->checkout(
                [$st_price_id => $quantity = 1],
                [
                    'success_url' => route('order.response', ['status' => 'Success.']),
                    'cancel_url' => route('order.response', ['status' => 'Failed.']),
                ]
            );

        // return view("order.status", compact("product", "user"));
    }

}
