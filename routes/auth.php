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

    Route::get("/register", 'RegisterController@showRegistrationForm')->name('auth.showRegistrationForm');
    Route::get("/login", 'LoginController@showLoginForm')->name('auth.showLoginForm');

    Route::post("/register", "RegisterController@register")->name("auth.register");
    Route::post("/login", "LoginController@login")->name("auth.login");
    Route::get("/logout", "LoginController@logout")->name("auth.logout");

    // TODO: 找回密码

});
