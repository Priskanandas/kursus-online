<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Session::get('akses_level') !== 'User') {
            return redirect('/')->with('warning', 'Anda tidak memiliki akses ke halaman ini.');
        }
        return $next($request);
    }
}
