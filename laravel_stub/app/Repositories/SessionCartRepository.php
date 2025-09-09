<?php

namespace App\Repositories;

use Illuminate\Contracts\Session\Session;

class SessionCartRepository implements CartRepositoryInterface
{
    private Session $session;
    private string $key = 'kosar';

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function increment(int $productId, int $qty = 1): array
    {
        $cart = $this->session->get($this->key, []);
        $cart[$productId] = ($cart[$productId] ?? 0) + $qty;
        $this->session->put($this->key, $cart);
        return $cart;
    }

    public function remove(int $productId): array
    {
        $cart = $this->session->get($this->key, []);
        unset($cart[$productId]);
        $this->session->put($this->key, $cart);
        return $cart;
    }

    public function all(): array
    {
        return $this->session->get($this->key, []);
    }
}

