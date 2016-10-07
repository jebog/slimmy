<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 09:57
 */

namespace App\Controllers\Auth;


use App\Controllers\BaseController;
use App\Models\User;
use Slim\Http\Request;
use Slim\Http\Response;
use Respect\Validation\Validator as v;


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

        $validation = $this->validation->validate($request, [
            'name' => v::noWhitespace(),
            'email' => v::notEmpty()->email(),
            'password' => v::notEmpty()
        ]);

        if (!$validation->ok()) {
            return $response->withRedirect($this->router->pathFor('register.get'));
        }

        $user = User::create([
            'name' => $request->getParam('name'),
            'email' => $request->getParam('email'),
            'password' => password_hash($request->getParam('name'), PASSWORD_DEFAULT)
        ]);

        return $response->withRedirect($this->router->pathFor('home'));


    }
}