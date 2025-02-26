<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->isQuest($request)) {
            return $next($request);
        }

        abort(Response::HTTP_FORBIDDEN);
    }

    protected function isQuest(Request $request) {
        $isQuest = true;
        return $isQuest;
    }
}
