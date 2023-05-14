<?php

namespace App\Controllers;

use App\Lib\View;

class CartController
{
    public function detail()
    {
        View::render('cart/detail', ['product' => 'nombre del producto']);
    }

    public function add($id)
    {
    }

    public function delete($id)
    {
    }
}
