<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OwnerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Session::get('role') !== 'owner') {
            return redirect('/login')->withErrors(['loginError' => 'Anda tidak memiliki akses sebagai owner.']);
        }

        return $next($request);
    }
}
