<?php

namespace App\Repositories;

use App\Models\User;

class LeaderboardRepository
{
    public function top()
    {
        return User::with(['highscore', 'elo', 'rank.achievable'])
            ->whereHas('highscore')
            ->orderByDesc(function ($q) {
                $q->select('highscore')
                  ->from('userhighscore')
                  ->whereColumn('userhighscore.userid', 'users.userID')
                  ->limit(1);
            })
            ->get();
    }

    public function searchByName(string $name)
    {
        return User::with(['highscore', 'elo', 'rank.achievable'])
            ->where('userName', $name)
            ->get();
    }
}

