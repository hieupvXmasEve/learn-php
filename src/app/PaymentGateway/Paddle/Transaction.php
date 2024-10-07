<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
    private const STATUS_PAID = 'paid';
    private const STATUS_PENDING = 'pending';
    private const STATUS_DECLINED = 'declined';
    public function __construct()
    {
        var_dump('Transaction created' . self::STATUS_PAID);
    }
}
