<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Models\Item;
use App\Services\CartService;

class ShopController extends Controller
{
    public function index()
    {
        $items = Item::query()->get();
        return view('shop.index', compact('items'));
    }

    public function addToCart(AddToCartRequest $request, CartService $cart)
    {
        $data = $request->validated();
        $cart->add((int) $data['termekID']);
        return back()->with('status', 'Item added');
    }

    public function removeFromCart(RemoveFromCartRequest $request, CartService $cart)
    {
        $data = $request->validated();
        $cart->remove((int) $data['productID']);
        return back()->with('status', 'Item removed');
    }
}
