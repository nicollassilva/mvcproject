<?php

namespace App\Validators;

abstract class UserValidator
{
    public static function register($requestData)
    {
        return \GUMP::is_valid($requestData, [
            'name' => ['required', 'between_len' => [6, 255]],
            'email' => ['required', 'valid_email'],
            'password' => ['required', 'between_len' => [6, 255]],
            'cpassword' => ['required', 'between_len' => [6, 255], 'equalsfield' => ['password']]
        ]);
    }

    public static function login($requestData)
    {
        return \GUMP::is_valid($requestData, [
            'email' => ['required', 'valid_email'],
            'password' => ['required', 'between_len' => [6, 255]]
        ]);
    }
}