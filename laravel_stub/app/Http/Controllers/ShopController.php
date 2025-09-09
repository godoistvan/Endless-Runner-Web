<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $items = DB::table('items')->get();
        return view('shop.index', compact('items'));
    }

    public function addToCart(Request $request)
    {
        $data = $request->validate([
            'termekID' => ['required','integer']
        ]);

        $cart = $request->session()->get('kosar', []);
        $cart[$data['termekID']] = ($cart[$data['termekID']] ?? 0) + 1;
        $request->session()->put('kosar', $cart);
        return back()->with('status', 'Item added');
    }

    public function removeFromCart(Request $request)
    {
        $data = $request->validate([
            'productID' => ['required','integer']
        ]);

        $cart = $request->session()->get('kosar', []);
        unset($cart[$data['productID']]);
        $request->session()->put('kosar', $cart);
        return back()->with('status', 'Item removed');
    }
}

