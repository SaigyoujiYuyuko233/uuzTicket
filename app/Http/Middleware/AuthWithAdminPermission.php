<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Request;

class AuthWithAdminPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->is_admin == false) {
            return $request->expectsJson()
                ? abort(403, 'You DO NOT have permission to access.')
                : Redirect::route('tickets.index');
        }

        return $next($request);
    }
}
