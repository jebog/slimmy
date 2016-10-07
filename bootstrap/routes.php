<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 09:32
 */

$app->get('/', 'HomeController:index')->setName('home');

$app->get('/login', 'AuthController:getLogin')->setName('login.get');
$app->post('/login', 'AuthController:postLogin')->setName('login.post');


$app->get('/register', 'AuthController:getRegister')->setName('register.get');
$app->post('/register', 'AuthController:postRegister')->setName('register.post');