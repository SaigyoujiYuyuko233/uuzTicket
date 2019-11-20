<?php

/*
|--------------------------------------------------------------------------
| general tickets routing
|--------------------------------------------------------------------------
|
| Endpoint: /tickets
| NameSpace: \Tickets
| Middleware: web | auth
|
*/

Route::get('/', 'ShowController@index')->name('tickets.index');
