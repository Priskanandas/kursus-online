<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Session::get('akses_level') !== 'Admin') {
            return redirect('/')->with('warning', 'Anda tidak memiliki akses ke halaman ini.');
        }
        return $next($request);
    }
}

