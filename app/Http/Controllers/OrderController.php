<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
// in blaid <p>Total à payer : {{ number_format($total, 2) }} €</p>

//Formulaire checkout avec validation
public function checkout()
{
    $cart = session()->get('cart', []);
    if (empty($cart)) {
        return redirect()->route('cart.index')->with('error', 'Panier vide');
    }
    $total = $this->calculateTotal($cart);
    return view('checkout', compact('cart', 'total'));
}




//Enregistrer commande + items
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required'
    ]);

    $cart = session('cart', []);
    $total = $this->calculateTotal($cart);

    $order = Order::create([
        'user_id' => auth()->id(),
        'total_price' => $total
    ]);

    foreach ($cart as $productId => $item) {
        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $productId,
            'quantity' => $item['quantity'],
            'price' => $item['price']
        ]);
    }

    session()->forget('cart');
    return redirect()->route('order.confirmation', $order->id);
}
//Page confirmation avec numéro //de commande
public function confirmation($id)
{
    $order = Order::findOrFail($id);
    return view('order.confirmation', compact('order'));
}




private function calculateTotal($cart)
{
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;

}
}