<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function show($id)
    {
        $user = User::find($id);

        echo $user->email;
    }
}
