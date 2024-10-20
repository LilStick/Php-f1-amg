<?php

namespace Models;

use Core\Database;

class Cart {
    public function addProduct($productId) {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("INSERT INTO cart (product_id) VALUES (?)");
        $stmt->execute([$productId]);
    }

    public function removeProduct($productId) {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("DELETE FROM cart WHERE product_id = ?");
        $stmt->execute([$productId]);
    }

    public function getCartItems() {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->query("SELECT p.*, c.quantity FROM cart c JOIN products p ON c.product_id = p.id");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getTotalPrice() {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->query("SELECT SUM(p.price * c.quantity) as total_price FROM cart c JOIN products p ON c.product_id = p.id");
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result['total_price'];
    }
}