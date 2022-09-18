<?php

namespace App\Actions\Orders;

use App\Models\Order;

class OrderStoreActions
{
    public function handle(array $data): Order
    {
        $order = Order::create($data);

        if ($order->exists) {
            for ($index = 0; $index < count($data['products_ids']); $index++) {
                $order->products()->attach($data['products_ids'][$index], [
                    'quantity' => $data['products_quantities'][$index] ?? 1,
                    'price' => $data['products_price'][$index] ?? 1,
                ]);
            }
        }

        return $order;
    }
}
