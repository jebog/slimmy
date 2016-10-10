<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 09:57
 */

namespace App\Controllers\Auth;


use App\Auth\Auth;
use App\Controllers\BaseController;
use App\Models\User;
use App\Validation\Validator;
use Respect\Validation\Validator as v;
use Slim\Flash\Messages;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Route;
use Slim\Views\Twig;


/**
 * @property  Validator validation
 * @property  Twig view
 * @property  Route router
 * @property  Auth auth
 * @property  Messages flash
 */
class AuthController extends BaseController
{


    public function getLogin(Request $request, Response $response)
    {

        return $this->view->render($response, 'auth/login.twig');
    }

    public function postLogin(Request $request, Response $response)
    {
        $validation = $this->validation->validate($request, [
            'email' => v::email(),
            'password' => v::notEmpty()
        ]);



        if (!$validation->ok()) {
            $this->flash->addMessage('error', 'Form validation error');
            return $response->withRedirect($this->router->pathFor('login.get'));
        }


        $auth = $this->auth->attempt(
            $request->getParam('email'),
            $request->getParam('password')
        );



        if (!$auth) {
            $this->flash->addMessage('error', 'Email or password (or both) is incorrect ');
            return $response->withRedirect($this->router->pathFor('login.get'));
        }

        $this->flash->addMessage('success', 'You are now logged');
        return $response->withRedirect($this->router->pathFor('home'));
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
            $this->flash->addMessage('error', 'Form validation error');
            return $response->withRedirect($this->router->pathFor('register.get'));
        }

        $user = User::create([
            'name' => $request->getParam('name'),
            'email' => $request->getParam('email'),
            'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT)
        ]);

        $this->flash->addMessage('success', 'New User Added');
        return $response->withRedirect($this->router->pathFor('home'));


    }

    public function logout($request , Response $response){

        $this->auth->logout();
        $this->flash->addMessage('success', 'Successfully disconnected');
        return $response->withRedirect($this->router->pathFor('home'));
    }
}