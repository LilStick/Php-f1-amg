<?php

namespace Core;

use PDO;

class Database
{
    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        $this->pdo = new PDO('pgsql:host=localhost;dbname=dbphpf1;port=5432', 'postgres', 'noeleroux2');
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}