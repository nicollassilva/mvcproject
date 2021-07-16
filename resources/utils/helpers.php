<?php

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