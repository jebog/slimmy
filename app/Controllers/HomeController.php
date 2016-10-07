<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 09:57
 */

namespace App\Controllers;


class HomeController extends BaseController
{


    public function index($request, $response)
    {

        return $this->view->render($response, 'home.twig');
    }
}