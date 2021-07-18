<?php
    require __DIR__ . "/../vendor/autoload.php";
    session_start();
    
use MinasRouter\Router\Route;

// The second argument is optional. It separates the Controller and Method from the string
// Example: "Controller@method"
Route::start("http://localhost", "@");

Route::globalMiddlewares([
    'userNotLogged' => App\Middlewares\userNotLogged::class
]);

Route::namespace("App\Controllers")
    ->group(function() {
        Route::get("/", "BlogController@index");

        /**
         * Users Routes
         */
        Route::post('/register', 'UserController@store')->name('users.store')->middleware('userNotLogged');
        Route::get('/register', 'UserController@create')->name('users.create')->middleware('userNotLogged');
    });


Route::execute();
