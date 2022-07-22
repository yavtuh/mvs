<?php


namespace App\Controllers;


use App\Heplers\SessionHelper;
use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        dd(SessionHelper::isUserLoggedIn());
    }
}