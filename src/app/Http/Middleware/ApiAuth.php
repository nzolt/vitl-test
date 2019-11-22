<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->get('apikey') == env('APIKEY') || $request->path() == 'users/getlist') {
            return $next($request);
        }
        return response()->json(['error' => 'Not authorized.'],403);
    }
}
