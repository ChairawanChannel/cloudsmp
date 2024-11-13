<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
            // Ekstrak salt dan hash dari password yang dihasilkan AuthMe
            $passwordData = explode('$', $user->password);
            if (count($passwordData) === 4 && $passwordData[1] === 'SHA') {
                $salt = $passwordData[2];
                $hash = $passwordData[3];

                // Hash password yang dimasukkan dengan salt
                $inputPasswordHash = hash('sha256', hash('sha256', $request->input('password')) . $salt);

                if ($inputPasswordHash === $hash) {
                    // Simpan sesi gamertag untuk pengguna yang berhasil login
                    Session::put('gamertag', $user->gamertag);

                    // Redirect ke halaman utama setelah login berhasil
                    return redirect('/')->with('success');
                }
            }
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->with(['error' => 'Gamertag atau password salah.']);
    }

    public function logout()
    {
        // Hapus sesi login
        Session::forget('gamertag');

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/login')->with('success', 'Logout berhasil');
    }
}
