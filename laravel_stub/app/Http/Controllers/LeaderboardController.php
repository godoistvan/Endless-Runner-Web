<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchLeaderboardRequest;
use App\Services\LeaderboardService;

class LeaderboardController extends Controller
{
    public function index(LeaderboardService $service)
    {
        $rows = $service->top();
        return view('leaderboard.index', compact('rows'));
    }

    public function search(SearchLeaderboardRequest $request, LeaderboardService $service)
    {
        $data = $request->validated();
        $rows = $service->search($data['searchplayer']);
        return view('leaderboard.index', compact('rows'))
            ->with('searched', $data['searchplayer']);
    }
}
