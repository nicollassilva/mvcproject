<?php

namespace App\Controllers;

use App\Models\User;
use MinasRouter\Http\Request;
use App\Validators\UserValidator;

class UserController
{
    public function create()
    {
        return view('blog.register');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $errors = UserValidator::register($data);

        if (is_array($errors)) {
            return view('blog.register', compact('errors'));
        }

        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

        $user = User::create($data);

        $_SESSION['userLogged'] = $user;

        return header('Location: /');
    }

    public function login(Request $request)
    {
        $data = $request->all();
        $errors = UserValidator::login($data);

        if (is_array($errors)) {
            return view('blog.login', compact('errors'));
        }

        if(!$user = User::where('email', $request->email)->first()) {
            return view('blog.login', [
                'errors' => ['O usuário informado não foi registrado']
            ]);
        }

        if(!password_verify($request->password, $user->password)) {
            return view('blog.login', [
                'errors' => ['A senha informada está incorreta']
            ]);
        }

        $_SESSION['userLogged'] = $user;

        return header('Location: /');
    }
}
