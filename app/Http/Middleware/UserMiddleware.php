<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->isUser() || !auth()->user()->isActive()) {
            abort(404);
        }

        return $next($request);
    }
}
