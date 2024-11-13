<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    public function vote()
    {
        // Cek apakah pengguna sudah vote sebelumnya
        $voteExists = DB::table('votes')->where('gamertag', session('gamertag'))->exists();

        if ($voteExists) {
            return back()->with('error', 'Anda sudah memberikan vote.');
        }

        DB::table('votes')->insert([
            'gamertag' => session('gamertag'),
            'has_voted' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Terima kasih telah memberikan vote!');
    }
}
