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

$app->get('/', 'HomeController:index')->setName('home');

$app->get('/login', 'AuthController:getLogin')->setName('login.get');
$app->post('/login', 'AuthController:postLogin')->setName('login.post');


$app->get('/register', 'AuthController:getRegister')->setName('register.get');
$app->post('/register', 'AuthController:postRegister')->setName('register.post');


$app->group('', function () {
    $this->get('/logout', 'AuthController:logout')->setName('logout');
})->add(new \App\Middleware\AuthMiddleware($container));
