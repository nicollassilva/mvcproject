<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function create()
    {
        return view('blog.register');
    }
}
