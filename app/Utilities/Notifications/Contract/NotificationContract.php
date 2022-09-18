<?php

namespace App\Utilities\Notifications\Contract;

interface NotificationContract
{
    public function send(string $from, string $to, string $message): bool;
}
