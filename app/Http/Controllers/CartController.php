<?php
// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return CartItem::with('product')->get();
    }

    public function store(Request $request)
    {
        $cartItem = new CartItem();
        $cartItem->product_id = $request->product_id;
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['message' => 'Item added to cart'], 200);
    }
}

