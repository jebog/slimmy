<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 19:07
 */

namespace App\Middleware;

class CsrfMiddleware extends Middleware
{

    public function __invoke($request, $response, $next)
    {

        $this->container->view->getEnvironment()->addGlobal('csrf', [
            'field' => '
            
                <input type="hidden" name="' . $this->container->csrf->getTokenNameKey() . '" value="' . $this->container->csrf->getTokenNameKey() . '"/>
                <input type="hidden" name="' . $this->container->csrf->getTokenValueKey() . '" value="' . $this->container->csrf->getTokenValue() . '"/>
            
            '
        ]);

        return $next($request, $response);
    }
}