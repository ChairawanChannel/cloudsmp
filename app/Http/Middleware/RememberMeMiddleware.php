<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;

class RememberMeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('gamertag') && Cookie::has('remember_token')) {
            $rememberToken = hash('sha256', Cookie::get('remember_token'));
            $user = DB::table('users')->where('remember_token', $rememberToken)->first();

            if ($user) {
                Session::put('gamertag', $user->gamertag);
            }
        }

        return $next($request);
    }
}
