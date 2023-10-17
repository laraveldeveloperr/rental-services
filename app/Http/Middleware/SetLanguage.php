<?php

namespace App\Http\Middleware;

use Closure;

class SetLanguage
{
    public function handle($request, Closure $next)
    {
        $lang = $request->session()->get('language');

        app()->setLocale($lang);

        return $next($request);
    }
}
