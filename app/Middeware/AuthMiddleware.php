<?php
/**
 * Created by PhpStorm.
 * User: donmarkus
 * Date: 10/10/16
 * Time: 6:11 PM
 */

namespace App\Middleware;


use Slim\Http\Request;
use Slim\Http\Response;

class AuthMiddleware extends Middleware
{

    public function __invoke(Request $request, Response $response, $next)
    {

        if (!$this->container->get('auth')->check()) {
            $this->container->get('flash')->addMessage('warning', 'You must be logged in to continue');
            $response->withRedirect($this->container->get('router')->pathFor('login.get'));
        }

        return $next($request, $response);
    }
}