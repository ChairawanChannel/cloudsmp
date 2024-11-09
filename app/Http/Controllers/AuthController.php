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

        // Dapatkan pengguna dari tabel `users` berdasarkan gamertag
        $user = DB::table('users')->where('gamertag', $request->input('gamertag'))->first();

        if ($user) {
            // Ekstrak salt dan hash dari format AuthMe: $SHA$<salt>$<hash>
            $passwordData = explode('$', $user->password);
            if (count($passwordData) === 4 && $passwordData[1] === 'SHA') {
                $salt = $passwordData[2];
                $hash = $passwordData[3];

                // Hash password yang dimasukkan dengan salt
                $inputPasswordHash = hash('sha256', hash('sha256', $request->input('password')) . $salt);

                if ($inputPasswordHash === $hash) {
                    // Ambil role dari tabel user_roles berdasarkan gamertag
                    $role = DB::table('user_roles')->where('gamertag', $user->gamertag)->value('role') ?? 'user';

                    // Simpan role dan gamertag di session
                    Session::put('role', $role);
                    Session::put('gamertag', $user->gamertag);

                    // Arahkan pengguna berdasarkan role
                    if ($role === 'admin') {
                        return redirect('/admin')->with('success', 'Login berhasil sebagai Admin!');
                    } elseif ($role === 'owner') {
                        return redirect('/owner')->with('success', 'Login berhasil sebagai Owner!');
                    } else {
                        return redirect('/')->with('success', 'Login berhasil sebagai User!');
                    }
                }
            }
        }

        // Jika gagal login, kembalikan dengan pesan error
        return back()->withErrors(['loginError' => 'Gamertag atau password salah.']);
    }

    // Fungsi untuk logout
    public function logout()
    {
        Session::forget(['role', 'gamertag']);
        return redirect('/login')->with('success', 'Logout berhasil');
    }
}
