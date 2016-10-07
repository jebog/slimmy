<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 10:33
 */

namespace app\Controllers;


use Slim\Views\Twig;

abstract class BaseController
{

    /**
     * @var Twig
     */
    protected $view;
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
        $this->view = $this->container->view;
    }

    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }
}