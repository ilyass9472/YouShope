<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $validatedData = $request->validate([
            'watch_id' => 'required|exists:watches,id',
            'model' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:1'
        ]);

        $cart = session()->get('cart', []);

        
        $exists = false;
        foreach ($cart as &$item) {
            if ($item['watch_id'] == $validatedData['watch_id']) {
                $item['quantity'] += $validatedData['quantity'];
                $exists = true;
                break;
            }
        }

        
        if (!$exists) {
            $cart[] = [
                'watch_id' => $validatedData['watch_id'],
                'model' => $validatedData['model'],
                'price' => $validatedData['price'],
                'quantity' => $validatedData['quantity']
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Montre ajoutée au panier');
    }

    public function removeFromCart(Request $request)
    {
        $watchId = $request->input('watch_id');
        $cart = session()->get('cart', []);

        $cart = array_filter($cart, function($item) use ($watchId) {
            return $item['watch_id'] != $watchId;
        });

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Montre retirée du panier');
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Panier vidé');
    }
}