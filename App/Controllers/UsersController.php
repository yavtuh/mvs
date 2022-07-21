<?php


namespace App\Controllers;


use App\Models\User;
use App\Validators\UserCreateValidator;
use Core\Controller;
use Core\View;

class UsersController extends Controller
{
    public function store(){
        $fields = filter_input_array(INPUT_POST, $_POST, 1);
        $validator = new UserCreateValidator();


        if($validator->validate($fields) && !$validator->checkEmailOnExists($fields['email'])){
            $userId = User::create($fields);

            if($userId){

            }

            $this->data['data'] = $fields;
            $this->data += $validator->getErrors();
            dd($this->data);
            View::render('auth/register', $this->data);
        }


    }
}