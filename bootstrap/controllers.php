<?php


$container['HomeController'] = function ($container) {
    return new App\Controllers\HomeController($container);
};

$container['AuthController'] = function ($container) {
    return new \App\Controllers\Auth\AuthController($container);
};