<?php


namespace App\Controllers;


use App\Models\User;
use App\Validators\UserCreateValidator;
use Core\Controller;
use Core\View;

class AuthController extends Controller
{

    public function login ()
    {
        View::render("auth/login");
    }

    public function register()
    {
        View::render("auth/register");
    }
    public function verify(){
        dd($_REQUEST);
    }


}