<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 09:57
 */

namespace App\Controllers\Auth;


use App\Controllers\BaseController;
use Slim\Http\Request;
use Slim\Http\Response;

class AuthController extends BaseController
{


    public function getLogin(Request $request, Response $response)
    {

        return $this->view->render($response, 'auth/login.twig');
    }

    public function postLogin(Request $request, Response $response)
    {

    }

    public function getRegister(Request $request, Response $response)
    {
        return $this->view->render($response, 'auth/register.twig');
    }

    public function postRegister(Request $request, Response $response)
    {

    }
}