<?php

namespace App\Models;

class Cart
{
    private $items = [];

    public function add(Product $product, int $quantity)
    {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function getItems()
    {
        return $this->items;
    }

    public function delete($id)
    {
        for ($i = 0; $i < count($this->items); $i++) {
            if ($this->items[$i]['product']->getId() === $id) {
                unset($this->items[$i]);
                break;
            }
        }
    }
}
