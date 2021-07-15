<?php

namespace App\Models;

use MinasORM\Database;

class User extends Database
{
    protected $fillables = [
        'name', 'email', 'password'
    ];
}
