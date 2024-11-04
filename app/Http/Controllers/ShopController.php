<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function showLandingpage() {
        return view('landing_page');
    }

    public function homepage() {
        return view('user.homepage');
    }

    public function addToCart(Request $request)
    {
        $product = [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image_url' => $request->image_url,
        ];

        // Get the cart from the session, or create a new one if it doesn't exist
        $cart = Session::get('cart', []);
        $cart[$request->id] = $product; // Add the product to the cart
        Session::put('cart', $cart); // Update the session

        return response()->json(['success' => 'Product added to cart']);
    }

    public function cart()
    {
        $cart = Session::get('cart', []); // Get the cart from the session
        return view('user.cart', compact('cart')); // Pass the cart to the view
    }


    public function checkout() {
        return view('user.checkout');
    }
}
