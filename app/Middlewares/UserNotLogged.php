<?php

namespace App\Middlewares;

use App\Models\User;

class userNotLogged
{
    public function handle($request, \Closure $next)
    {
        if (!auth()) {
            return $next();
        }

        return false;
    }
}
