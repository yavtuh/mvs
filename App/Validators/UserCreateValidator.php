<?php


namespace App\Validators;


use App\Models\User;

class UserCreateValidator
{
    protected array $errors = [
        'name_error' => 'The name should contain more than 2 letters',
        'surname_error' => 'The name should contain more than 2 letters',
        'age_error' => 'Birth date is invalid',
        'email_error' => 'Email is invalid',
        'password_error' => 'The name should contain more than 7 letters'
    ];

    protected array $rules = [
        'name' => '/[A-Za-zА-Яа-я]{2,}/',
        'surname' => '/[A-Za-zА-Яа-я]{2,}/',
        'age' => '/[\d]{4}-[\d]{2}-[\d]{2}/',
        'email' => '/^[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i',
        'password' => '/[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]{8,}/'
    ];

    public function validate(array $fields):bool
    {
        foreach ($fields as $key => $field) {
            if(preg_match($this->rules[$key], $field)){
                unset($this->errors["{$key}_error"]);
            }

        }
        return empty($this->errors);
    }
    public function checkEmailOnExists(string $email):bool
    {
        $result = false;
        if(User::select()->where(['email', '=', $email]))
        {
            $this->errors = [
                'email_error' => 'User with this email already exists'
            ];
            $result = true;

        }
        return $result;
    }
    public function getErrors():arrary
    {
        return $this->errors;
    }
}