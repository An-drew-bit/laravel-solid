<?php

namespace App\Utilities\Notifications;

use App\Utilities\Notifications\Contract\NotificationContract;

class SlackNotification implements NotificationContract
{
    public function send(string $from, string $to, string $message): bool
    {
        return true;
    }
}
