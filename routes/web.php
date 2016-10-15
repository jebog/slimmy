<?php
/**
 * Created by PhpStorm.
 * User: donmarkus
 * Date: 07/10/2016
 * Time: 09:32
 */

/**
 * @var \Slim\Container $container
 */

/**
 * Routes for guest users
 */

//$app->get('', function () {

$app->get('/', 'App\Controllers\HomeController:index')->setName('home');
$app->get('/login', 'App\Controllers\Auth\AuthController:getLogin')->setName('login.get');
$app->post('/login', 'App\Controllers\Auth\AuthController:postLogin')->setName('login.post');


$app->get('/register', 'App\Controllers\Auth\AuthController:getRegister')->setName('register.get');
$app->post('/register', 'App\Controllers\Auth\AuthController:postRegister')->setName('register.post');

//})->add(new \App\Middleware\GuestMiddleware($container));


/**
 * Routes for authenticated users
 */
$app->group('', function () {

    $this->get('/logout', 'App\Controllers\Auth\AuthController:logout')->setName('logout');

})->add(new \App\Middleware\AuthMiddleware($container));
