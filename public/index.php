<?php
    require __DIR__ . "/../vendor/autoload.php";
    
use MinasRouter\Router\Route;

// The second argument is optional. It separates the Controller and Method from the string
// Example: "Controller@method"
Route::start("http://localhost", "@");

Route::namespace("App\Controllers")
    ->group(function() {
        Route::get("/", "BlogController@index");

        Route::get("/user/{id}", "UserController@show")
            ->name('users.show')
            ->whereNumber('id');
    });


Route::execute();
