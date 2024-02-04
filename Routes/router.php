<?php

use Http\Controllers\TestController;

$router->get('/salman/test', [TestController::class, 'index']);