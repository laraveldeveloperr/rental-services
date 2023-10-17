<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class User_role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $user_role)
    {
        // Not Logged
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Not allowed
        if ($request->user()->user_role < $user_role) {
            return abort(404);
        }
        return $next($request);
    }
}
