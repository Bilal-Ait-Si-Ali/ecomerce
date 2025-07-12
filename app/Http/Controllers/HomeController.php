<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil avec la liste des produits.
     */
    public function index()
    {
        $products = Product::latest()->paginate(12); // pagination facultative
        return view('home', compact('products'));
    }

    /**
     * Affiche la page de détail pour un produit.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('home.show', compact('product'));
    }
}
