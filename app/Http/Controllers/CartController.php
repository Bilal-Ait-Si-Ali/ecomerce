<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\OrderItem;
class CartController extends Controller
{

    /*return redirect()->back()->with('success', 'Quantité mise à jour.');
    return redirect()->route('cart.index')->with('success', 'Produit ajouté au panier.');
    return redirect()->back()->with('success', 'Produit retiré du panier.');*/



//Afficher le contenu du panier
public function index()
{
    $cart = session()->get('cart', []);
    $total = $this->calculateTotal($cart);
    return view('cart', compact('cart', 'total'));
}


//Ajouter un produit au panier

public function add(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required',
    ]);

    $product = Product::findOrFail($request->product_id);
    $quantity = (int) $request->quantity;

    // Get current cart from session or initialize empty array
    $cart = session()->get('cart', []);

    // If product already in cart, increase quantity
    if (isset($cart[$product->id])) {
        $cart[$product->id]['quantity'] += $quantity;
    } else {
        // Add new product to cart
        $cart[$product->id] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'image' => $product->image_url ?? null, // optional
        ];
    }

    // Save back to session
    session(['cart' => $cart]);

    return response()->json([
        'success' => true,
        'product_name' => $product->name,
        'cart_count' => array_sum(array_column($cart, 'quantity')), // optional
    ]);
}

public function count()
{
    $cart = session('cart', []);
    $totalQuantity = array_sum(array_column($cart, 'quantity'));

    return response()->json([
        'cart_count' => $totalQuantity
    ]);
}

//Modifier les quantités
public function update(Request $request)
{
    $cart = session()->get('cart', []);
    if (isset($cart[$request->id])) {
        $cart[$request->id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);
    }
    return redirect()->route('cart.index')->with('success', 'Quantité mise à jour.');
}

//Supprimer un produit
public function remove($id)
{
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }
    return redirect()->route('cart.index');
}
//Calculer le total du panier
private function calculateTotal($cart)
{
    return collect($cart)->sum(function ($item) {
        return $item['price'] * $item['quantity'];
    });
}
}
