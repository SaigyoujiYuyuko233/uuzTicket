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
    return 'you are in!';
})->middleware(['auth']);

/*
 * User auth routers
 */

Route::prefix("/auth")->group(function () {

    // register pages
    Route::get("/register", 'Auth\RegisterController@showRegistrationForm');

    // login pages
    Route::get("/login", 'Auth\LoginController@showLoginForm');

    // auth post entry
    Route::prefix("/post")->group(function () {

        // registry
        Route::post("/register", "Auth\RegisterController@register")->name("regEntry");

        // login
        //Route::post("/login", "");
    });

});
