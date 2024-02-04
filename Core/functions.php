<?php

if(!function_exists('dd')) {
    function dd(...$args) {
        foreach ($args as $arg) {
            echo "<pre>";
            var_export($arg);
            echo  "</pre>";
        }
        exit(1);
    }
}
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}



function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path.".blade.php");
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

