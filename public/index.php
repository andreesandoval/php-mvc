<?php

use App\Lib\Routing\Handler;

require_once __DIR__ . '/../app/bootstrap.php';

(new Handler($router, $_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']))->handle();
