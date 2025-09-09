<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
    public function index()
    {
        $rows = DB::table('users')
            ->join('userhighscore', 'userhighscore.userid', '=', 'users.userID')
            ->join('elo', 'elo.userid', '=', 'users.userID')
            ->join('ranks', 'ranks.userid', '=', 'users.userID')
            ->join('achievableranks', 'ranks.rankid', '=', 'achievableranks.id')
            ->select('users.userName as name', 'userhighscore.highscore', 'achievableranks.rank', 'elo.elo')
            ->orderByDesc('userhighscore.highscore')
            ->get();

        return view('leaderboard.index', compact('rows'));
    }

    public function search(Request $request)
    {
        $data = $request->validate([
            'searchplayer' => ['required','string']
        ]);

        $rows = DB::table('users')
            ->join('userhighscore', 'userhighscore.userid', '=', 'users.userID')
            ->join('elo', 'elo.userid', '=', 'users.userID')
            ->join('ranks', 'ranks.userid', '=', 'users.userID')
            ->join('achievableranks', 'ranks.rankid', '=', 'achievableranks.id')
            ->where('users.userName', $data['searchplayer'])
            ->select('users.userName as name', 'userhighscore.highscore', 'achievableranks.rank', 'elo.elo')
            ->get();

        return view('leaderboard.index', compact('rows'))
            ->with('searched', $data['searchplayer']);
    }
}

