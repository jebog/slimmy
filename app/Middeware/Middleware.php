<?php

/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 19:02
 */
namespace App\Middleware;


use Slim\Container;

abstract class Middleware
{
    /**
     * @var Container $container
     */
    protected $container;

    /**
     * Middleware constructor.
     * @param $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }


}