<?php

use App\Controllers\CartController;
use App\Controllers\HomeController;
use App\Lib\Routing\Route;
use App\Lib\Routing\Router;

$router = new Router([
    new Route('home', '/', [HomeController::class], ['GET']),
    new Route('cart_detail', '/cart/detail', [CartController::class, 'detail'], ['GET']),
    new Route('cart_add', '/api/cart', [CartController::class, 'add'], ['POST']),
    new Route('cart_delete', '/api/cart', [CartController::class, 'delete'], ['DELETE']),
]);
