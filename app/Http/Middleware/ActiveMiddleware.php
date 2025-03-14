<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->isActive($request)) {
            return $next($request);
        }

        abort(Response::HTTP_FORBIDDEN);
    }

    protected function isActive(Request $request) {
        $isActive = true;
        return $isActive;
    }
}
