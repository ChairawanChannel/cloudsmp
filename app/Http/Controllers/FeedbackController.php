<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class FeedbackController extends Controller
{
    public function showForm()
    {
        return view('users.feedback');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gamertag' => 'required|string',
            'message' => 'required|string',
        ]);

        $gamertag = Session::get('gamertag');

        $recentFeedback = DB::table('feedback')
            ->where('gamertag', $gamertag)
            ->where('created_at', '>=', Carbon::now()->subDays(7))
            ->exists();

        if ($recentFeedback) {
            return back()->with('error', 'Anda hanya dapat memberikan feedback sekali setiap minggu.');
        }

        // Simpan data feedback
        DB::table('feedback')->insert([
            'gamertag' => $gamertag,
            'message' => $request->input('message'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Feedback Anda berhasil dikirim.');
    }
}
