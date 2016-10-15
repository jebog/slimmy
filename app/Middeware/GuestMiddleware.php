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

class GuestMiddleware extends Middleware
{

    public function __invoke(Request $request, Response $response, $next)
    {

        if ($this->container->get('auth')->check()) {
            return $response->withRedirect($this->container->get('router')->pathFor('home'));
        }

        return $next($request, $response);
    }
}