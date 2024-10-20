<?php

namespace Models;

use Core\Database;

class Product
{
    public static function getAll()
    {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->query('SELECT * FROM products');
        return $stmt->fetchAll();
    }

    public static function getById($id)
    {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}