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
    Route::get("/register", 'RegisterController@showRegistrationForm')->name('auth.view.register');

    // login pages
    Route::get("/login", 'LoginController@showLoginForm')->name('auth.view.login');

});

// post sections
Route::prefix("/do")->group(function () {

    // registry
    Route::post("/register", "RegisterController@register")->name("auth.do.register");

    // login
    Route::post("/login", "LoginController@login")->name("auth.do.login");

    // logout
    Route::get("/logout", "LoginController@logout")->name("auth.do.logout");

});
