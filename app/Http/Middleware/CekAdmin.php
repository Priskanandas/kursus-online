<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Session()->get('akses_level') != 'Admin') {
            return redirect('admin/dashboard')->with(['warning' => 'Anda tidak memiliki akses ke halaman ini.']);
        }
        return $next($request);
    }
}
