<?php

/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 08/10/2016
 * Time: 15:12
 */
namespace App\Auth;

use App\Models\User;

class Auth
{


    public function user()
    {
        if (isset($_SESSION['user'])){
            return User::find($_SESSION['user']);
        }

        return null;
    }

    public function check()
    {
        return isset($_SESSION['user']);
    }

    public function attempt($email, $password)
    {
        $user = User::query()
            ->where('email', $email);

        if (!$user)
            return false;

        if (password_verify($password, $user->password)) {
            $_SESSION['user'] = $user->id;
            return true;
        }


        return false;
    }
}