<?php

namespace App\Lib;

class View
{
    public static function render(string $view, array $data = [])
    {
        extract($data);
        require_once __DIR__ . "/../views/$view.phtml";
    }
}
