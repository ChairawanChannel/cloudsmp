<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class FeedbackController extends Controller
{
    // Menampilkan halaman form feedback
    public function showForm()
    {
        return view('users.feedback');
    }

    // Menyimpan feedback ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'gamertag' => 'required|string',
            'message' => 'required|string',
        ]);

        // Ambil gamertag dari session
        $gamertag = Session::get('gamertag');

        // Cek jika sudah ada feedback dari gamertag ini dalam waktu 7 hari terakhir
        $recentFeedback = DB::table('feedback')
            ->where('gamertag', $gamertag)
            ->where('created_at', '>=', Carbon::now()->subDays(7)) // Mengecek dalam rentang 7 hari terakhir
            ->exists();

        if ($recentFeedback) {
            // Jika sudah ada feedback, tampilkan pesan error
            return back()->with('error', 'Anda hanya dapat memberikan feedback sekali setiap minggu.');
        }

        // Jika belum ada feedback dalam 7 hari terakhir, simpan feedback baru
        DB::table('feedback')->insert([
            'gamertag' => $gamertag,
            'message' => $request->input('message'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Feedback Anda berhasil dikirim.');
    }
}
