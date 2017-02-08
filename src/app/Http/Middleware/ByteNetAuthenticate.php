<?php

namespace ByteNet\LaravelAdminBase\app\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ByteNetAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            }

            return redirect()->guest(config('bytenet.admin.base.route_prefix') . '/login');
        }

        return $next($request);
    }
}
