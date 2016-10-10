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
        if (!empty($_SESSION['user'])){
            return User::query()
                ->find($_SESSION['user']);
        }

        return null;
    }

    public function check()
    {
        return !empty($_SESSION['user']);
    }

    public function attempt($email, $password)
    {
        $user = User::query()
            ->where('email', $email)
            ->first();

        if (!$user){
            return false;
        }

        if (password_verify($password, $user->password)) {
            $_SESSION['user'] = $user->id;
            return true;
        }

        return false;
    }

    public function logout(){
        unset($_SESSION['user']);
    }
}