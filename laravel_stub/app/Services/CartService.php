<?php

namespace App\Services;

use App\Repositories\SessionCartRepository;

class CartService
{
    private SessionCartRepository $repo; // Using concrete to avoid binding requirement

    public function __construct(SessionCartRepository $repo)
    {
        $this->repo = $repo;
    }

    public function add(int $productId): array
    {
        return $this->repo->increment($productId, 1);
    }

    public function remove(int $productId): array
    {
        return $this->repo->remove($productId);
    }

    public function all(): array
    {
        return $this->repo->all();
    }
}

