<?php
/*
|--------------------------------------------------------------------------
| Auth routing
|--------------------------------------------------------------------------
|
| Endpoint: /admin
| Middleware: web | admin
|
*/

Route::get('/', 'DashboardController@rootRedirection');
Route::get('/dashboard', 'DashboardController@show')->name('admin.dashboard');
