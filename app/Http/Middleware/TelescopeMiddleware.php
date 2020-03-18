<?php

namespace App\Http\Middleware;

use Closure;

class TelescopeMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!in_array($request->ip(), [
            '127.0.0.1',
            '163.158.214.111',
        ], true)) {
            return abort(403);
        }

        return $next($request);
    }
}
