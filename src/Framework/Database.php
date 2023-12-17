<?php

declare(strict_types=1);

namespace Framework;

use PDO, PDOException;

class Database
{
    public function __construct(string $driver, array $config, string $username, string $password)
    {
        $driver = 'mysql';
        $config = http_build_query(data: [
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'budget'
        ], arg_separator: ';');

        $dsn = "{$driver}:{$config}";
        $username = 'root';
        $password = '';

        try {
            $db = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            die("Unable to connect to database");
        }
    }
}