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
    return view('cart.index', compact('cart', 'total'));
}


//Ajouter un produit au panier
public function add(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];
    }

    session()->put('cart', $cart);
    return redirect()->route('cart.index')->with('success', 'Produit ajouté au panier.');
}

//Modifier les quantités
public function update(Request $request)
{
    $cart = session()->get('cart', []);
    if (isset($cart[$request->id])) {
        $cart[$request->id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);
    }
    return redirect()->route('cart.index');
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
