<?php

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use App\DB\Expense;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$expense = new Expense;   
if ($expense->createTable()) {
    echo "table created successfully!" . PHP_EOL;
    exit;
}

echo "Failed to create table!" . PHP_EOL;