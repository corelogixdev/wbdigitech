<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
  public function handle(Request $request, Closure $next)
    {
     
        // If not logged in
        if (!auth()->check()) {
            abort(403, 'Forbidden');
        }

        // If logged in but not admin
        if (!auth()->user()->is_admin) {  // adjust field name if different
            abort(403, 'Forbidden');
        }

        // If logged in and admin → allow
        return $next($request);
    }

}
