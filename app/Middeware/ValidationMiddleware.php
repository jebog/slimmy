<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 19:07
 */

namespace App\Middleware;

class ValidationMiddleware extends Middleware
{

    public function __invoke($request, $response, $next)
    {

        if (!empty($_SESSION['errors'])) {
            $this->container->view->getEnvironment()->addGlobal('errors', $_SESSION['errors']);
            $this->container->view->getEnvironment()->addGlobal('old', $_SESSION['old']);
            unset($_SESSION['errors']);
            unset($_SESSION['old']);
        }

        return $next($request, $response);
    }
}