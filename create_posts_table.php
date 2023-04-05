<?php

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use App\DB\Post;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$post = new Post;   
if ($post->createTable()) {
    echo "table created successfully!" . PHP_EOL;
    exit;
}

echo "Failed to create table!" . PHP_EOL;