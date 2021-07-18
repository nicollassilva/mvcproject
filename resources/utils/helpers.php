<?php

use App\Models\User;
use App\Utils\View;

if(! function_exists('view')) {
    /**
     * Esse método retorna uma view (página)
     * 
     * @param string $viewPath
     * @param array $variables = []
     * 
     */
    function view(string $viewPath, array $variables = []) {
        return View::render($viewPath, $variables);
    }
}

if(! function_exists('auth')) {
    /**
     * Esse método retorna o usuário autenticado.
     * 
     * @return null|\App\Models\User
     */
    function auth(): ?User {
        $authSession = isset($_SESSION['userLogged']) ? $_SESSION['userLogged'] : null;

        if($authSession instanceof User) {
            return $authSession;
        }

        return null;
    }
}