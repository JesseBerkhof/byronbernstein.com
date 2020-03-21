<?php

namespace App\Http\Middleware;

use Closure;

class Blocked
{
    private $blockedIps = [
        '31.201.19.60',
    ];

    public function handle($request, Closure $next)
    {
        if (in_array($request->ip(), $this->blockedIps, true)) {
            return abort(500);
        }

        return $next($request);
    }
}
