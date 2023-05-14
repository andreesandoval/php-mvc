<?php

use App\Lib\Routing\Handler;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/lib/Routing/Handler.php';

(new Handler($router, $_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']))->handle();
