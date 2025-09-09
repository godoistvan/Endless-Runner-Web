<?php

namespace App\Repositories;

interface CartRepositoryInterface
{
    public function increment(int $productId, int $qty = 1): array;
    public function remove(int $productId): array;
    public function all(): array;
}

