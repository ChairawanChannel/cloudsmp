<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'feedback' => 'required|string|max:1000',
        ]);

        DB::table('feedback')->insert([
            'gamertag' => Session::get('gamertag'),
            'message' => $request->input('feedback'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan flash message
        return back()->with('success', 'Feedback Anda berhasil dikirim!');
    }
}
