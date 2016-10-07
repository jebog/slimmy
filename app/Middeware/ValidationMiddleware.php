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
        dd('middleware');
    }
}