<?php

namespace Controllers;

use Models\Product;

class ProductController
{
    public function index()
    {
        $products = Product::getAll();
        require_once __DIR__ . '/../Views/product_list.php';
    }

    public function show()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $product = Product::getById($id);
            require_once __DIR__ . '/../Views/product_detail.php';
        } else {
            echo "Product not found.";
        }
    }
}