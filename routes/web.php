<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view('home');
})->middleware(['auth']);

/*
 * User auth routers
 */

Route::prefix("/auth")->group(function () {

    // register pages
    Route::get("/register", 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

    // login pages
    Route::get("/login", 'Auth\LoginController@showLoginForm')
        ->name('login');

    // auth post entry
    Route::prefix("/post")->group(function () {

        // registry
        Route::post("/register", "Auth\RegisterController@register")
            ->name("regEntry");

        // login
        Route::post("/login", "Auth\LoginController@login")
            ->name("logEntry");

        // logout
        Route::get("/logout", "Auth\LoginController@logout")
            ->name("logout");

    });

});
