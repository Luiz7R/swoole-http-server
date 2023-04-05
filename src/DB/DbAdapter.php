<?php

namespace App\DB;

use PDO;

class DbAdapter
{

    public static function getPdo()
    {
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];
        $db_name = $_ENV['DB_NAME'];
        $db_host = $_ENV['DB_HOST'];
        
        $dsn = "mysql:host=$db_host;dbname=$db_name";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        return new PDO($dsn, $user, $pass, $options);
    }

    public static function execute(string $query, ?array $params = null): bool
    {
        $pdo = self::getPdo();
        $statement = $pdo->prepare($query);
        $result = $statement->execute($params);
        $pdo = null;
        return $result;
    }

    public static function fetchAll(string $query, array $params)
    {
        $pdo = self::getPdo();
        $statement = $pdo->prepare($query);
        $statement->execute($params);
        $data = $statement->fetchAll();
        $pdo = null;
        return $data;
    }
}