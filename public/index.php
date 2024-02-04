<?php

use Core\Router;


const BASE_PATH = __DIR__.'/../';
require_once BASE_PATH . 'vendor/autoload.php';
require_once BASE_PATH . 'Core/functions.php';

$router = new Router();
require_once BASE_PATH."Routes/router.php";


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (Throwable $exception) {
   dd($exception);
}





