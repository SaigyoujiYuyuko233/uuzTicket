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

// root path redirect to tickets.index
Route::get('/', 'Tickets\ShowController@rootRedirection')->name('tickets.rootRedirection')->middleware('auth');
