<?php

/*
|--------------------------------------------------------------------------
| Auth routing
|--------------------------------------------------------------------------
|
| Endpoint: /auth
| Middleware: web
|
*/

// view sections
Route::group(['middleware' => 'guest'], function () {

    // register pages
    Route::get("/register", 'RegisterController@showRegistrationForm')->name('auth.register');
    Route::get("/login", 'LoginController@showLoginForm')->name('auth.login');

    // registry
    Route::post("/register", "RegisterController@register")->name("auth.register.handle");
    Route::post("/login", "LoginController@login")->name("auth.login.handle");
    Route::get("/logout", "LoginController@logout")->name("auth.logout.handle");

});