<?php
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';


$transaction = new Transaction();

echo $transaction::class;


