<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   // Dashboard avec Stats
    public function dashboard() {
    $productsCount = Product::count();
    $ordersCount = Order::count();
    return view('admin.dashboard', compact('productsCount', 'ordersCount'));
    }
    //Liste des Commandes
    public function orders() {
        $orders = Order::with('items')->latest()->get();
        return view('admin.orders.index', compact('orders'));
    }
    //Changer statut commande
    public function updateStatus(Request $request, $id) {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();
        return back()->with('success', 'Statut mis à jour');
    }
}
