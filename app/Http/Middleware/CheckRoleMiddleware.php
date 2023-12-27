<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->role_id == $role) {
            return $next($request);
        }

        abort(403, 'Unauthorized.');
    }
}
