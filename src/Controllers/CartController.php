<?php

namespace Controllers;

use Models\Cart;

class CartController {
    public function add() {
        $productId = $_POST['product_id'];
        $cart = new Cart();
        $cart->addProduct($productId);
        header('Location: /cart');
        exit();
    }

    public function remove() {
        $productId = $_POST['product_id'];
        $cart = new Cart();
        $cart->removeProduct($productId);
        header('Location: /cart');
        exit();
    }

    public function index() {
        $cart = new Cart();
        $cartItems = $cart->getCartItems();
        $totalPrice = $cart->getTotalPrice();
        require __DIR__ . '/../Views/cart.php';
    }
}