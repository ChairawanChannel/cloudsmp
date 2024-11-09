<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EnsureUserIsAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        // Diagnostik: Menampilkan sesi yang aktif
        if (!Session::has('gamertag')) {
            return redirect('/login')->withErrors(['loginError' => 'Silakan login terlebih dahulu.']);
        }

        // Jika sesi tersedia, tambahkan pesan diagnostik ke halaman
        Session::flash('debug_message', 'Sesi terdeteksi untuk gamertag: ' . Session::get('gamertag'));

        return $next($request);
    }
}
