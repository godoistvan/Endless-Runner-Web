<?php

namespace App\Services;

use App\Repositories\LeaderboardRepository;

class LeaderboardService
{
    private LeaderboardRepository $repo;

    public function __construct(LeaderboardRepository $repo)
    {
        $this->repo = $repo;
    }

    public function top()
    {
        return $this->repo->top()->map(function ($u) {
            return [
                'name' => $u->userName,
                'highscore' => optional($u->highscore)->highscore,
                'rank' => optional(optional($u->rank)->achievable)->rank,
                'elo' => optional($u->elo)->elo,
            ];
        });
    }

    public function search(string $name)
    {
        return $this->repo->searchByName($name)->map(function ($u) {
            return [
                'name' => $u->userName,
                'highscore' => optional($u->highscore)->highscore,
                'rank' => optional(optional($u->rank)->achievable)->rank,
                'elo' => optional($u->elo)->elo,
            ];
        });
    }
}

