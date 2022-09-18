<?php

namespace App\Utilities\Notifications;

use App\Utilities\Notifications\Contract\NotificationContract;

class TelegramNotification implements NotificationContract
{
    public function send(string $from, string $to, string $message): bool
    {
        return true;
    }
}
