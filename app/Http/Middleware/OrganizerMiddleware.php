<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class OrganizerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('organizer')->check()){
            return redirect()->route('organizer.login');
        }
        return $next($request);
    }
}
