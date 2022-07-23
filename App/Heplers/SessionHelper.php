<?php


namespace App\Heplers;


class SessionHelper
{
    public static function isUserLoggedIn():bool
    {

        return !empty($_SESSION['user_data']);
    }

    public static function userId()
    {
        return $_SESSION['user_data']['id'];
    }

    public static function setUserData($id, ...$args)
    {
        $_SESSION['user_data'] = array_merge([
            'id' => $id
        ], $args);
    }

    public static function destroy()
    {
        if(session_id()) {
            session_destroy();
        }
    }
}