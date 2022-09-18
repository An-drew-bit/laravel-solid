<?php

namespace App\Http\Controllers;

use App\Utilities\Notifications\Contract\NotificationContract;

class OrderNotificationController extends Controller
{
    public function index(NotificationContract $notificationContract): bool
    {
        return $notificationContract->send('1000', '2000', 'Hello World');
    }
}
