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

Route::get("/register", 'RegisterController@showRegistrationForm')->name('auth.showRegistrationForm');
Route::get("/login", 'LoginController@showLoginForm')->name('auth.showLoginForm');

Route::post("/register", "RegisterController@register")->name("auth.register");
Route::post("/login", "LoginController@login")->name("auth.login");
Route::get("/logout", "LoginController@logout")->name("auth.logout");

// TODO: 邮箱认证
Route::get('/verify/notice', 'VerificationController@show')->name('auth.verification.notice');
Route::get('/verify/resend', 'VerificationController@resend')->name('auth.verification.resend');
Route::get('/verify/{timestamp}', 'VerificationController@verify')->name('verification.verify');

// TODO: 找回密码
