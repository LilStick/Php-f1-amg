<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;
use Controllers\CartController;
use Controllers\ProductController;

$router = new Router();

// Définir les routes
$router->get('/', [ProductController::class, 'index']);
$router->get('/product', [ProductController::class, 'show']);
$router->post('/cart/add', [CartController::class, 'add']);
$router->post('/cart/remove', [CartController::class, 'remove']); // Nouvelle route pour la suppression
$router->get('/cart', [CartController::class, 'index']);

// Lancer le routeur
$router->run();