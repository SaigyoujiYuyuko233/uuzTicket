<?php

/*
|--------------------------------------------------------------------------
| basic routing
|--------------------------------------------------------------------------
|
| Endpoint: /
| Middleware: web
|
*/

Route::get('/', function () {
    return 'work in process';
})->middleware(['auth'])->name('tickets.index');
