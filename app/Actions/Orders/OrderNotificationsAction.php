<?php

namespace App\Actions\Orders;

use App\Models\Order;

class OrderNotificationsAction
{
    public function handle(Order $order): mixed
    {
        try {
            $className = 'App\Utilities\Notifications\\' . ucfirst($order->notification_type) . 'Notification';
            return (new $className)->send();

        } catch (\Exception $exception) {
            abort(404, "Формат {$order->notification_type} не поддерживается");
        }
    }
}
