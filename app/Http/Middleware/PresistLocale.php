<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PresistLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // config(['app.locale' => session('locale', 'en')]);
        app()->setlocale(session('locale', 'en'));
        return $next($request);
    }
}
