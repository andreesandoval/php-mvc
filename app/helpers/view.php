<?php

use App\Lib\View;

function view(string $view, array $data = [])
{
    return new View($view, $data);
}
