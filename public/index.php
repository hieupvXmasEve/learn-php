<?php

declare(strict_types = 1);


$root = dirname(__DIR__) . DIRECTORY_SEPARATOR; // get the root directory
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR); // define the app path
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR); // define the files path
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR); // define the views path
require APP_PATH . 'App.php';
require APP_PATH . 'helpers.php';

$files = getTransactionFiles(FILES_PATH);

$transactions = [];
foreach($files as $file) {
    $transactions = array_merge($transactions, getTransactions($file, 'extractTransaction'));
}

$totals = calculateTotals($transactions);

require VIEWS_PATH . 'transactions.php';