<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'gamertag' => 'required|string',
            'password' => 'required|string',
        ]);

        // Ambil pengguna dari tabel users berdasarkan gamertag
        $user = DB::table('users')->where('gamertag', $request->input('gamertag'))->first();

        if ($user) {
            $passwordData = explode('$', $user->password);
            if (count($passwordData) === 4 && $passwordData[1] === 'SHA') {
                $salt = $passwordData[2];
                $hash = $passwordData[3];

                // Hash password yang dimasukkan dengan salt
                $inputPasswordHash = hash('sha256', hash('sha256', $request->input('password')) . $salt);

                if ($inputPasswordHash === $hash) {
                    Session::put('gamertag', $user->gamertag);

                    // Jika Remember Me dicentang, set token ke cookie dan simpan di database
                    if ($request->has('remember')) {
                        $token = Str::random(60); // Generate random token
                        Cookie::queue('remember_token', $token, 1440); // 1440 menit = 24 jam

                        // Simpan token ke database (misalnya di tabel users atau login_sessions)
                        DB::table('users')->where('gamertag', $user->gamertag)->update([
                            'remember_token' => hash('sha256', $token)
                        ]);
                    }

                    return redirect('/')->with('success', 'Login berhasil, selamat datang!');
                }
            }
        }

        return back()->withErrors(['loginError' => 'Gamertag atau password salah.']);
    }

    public function logout()
    {
        // Hapus cookie remember_token jika ada
        if (Cookie::has('remember_token')) {
            Cookie::queue(Cookie::forget('remember_token'));
        }

        Session::forget('gamertag');

        return redirect('/login')->with('success', 'Logout berhasil');
    }
}
