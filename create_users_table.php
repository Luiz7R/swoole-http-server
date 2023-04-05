<?php

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use App\DB\User;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$user = new User;   
if ($user->createTable()) {
    echo "table created successfully!" . PHP_EOL;
    exit;
}

echo "Failed to create table!" . PHP_EOL;