<?php
    require __DIR__ . "/../vendor/autoload.php";
    
use MinasRouter\Router\Route;

// The second argument is optional. It separates the Controller and Method from the string
// Example: "Controller@method"
Route::start("http://localhost", "@");

Route::namespace("App\Controllers")
    ->group(function() {
        Route::get("/", "BlogController@index");

        /**
         * Users Routes
         */
        Route::get('/register', 'UserController@create')->name('users.create');
    });


Route::execute();
