<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

      /**
     * Affiche la page de détail pour un produit.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $products = Product::latest()->limit(3)->get();
        return view('product', compact('product','products'));
    }
    /**
     * Afficher la liste des produits (admin).
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Afficher le formulaire de création.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Enregistrer un nouveau produit.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'image'       => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Produit créé avec succès.');
    }

    /**
     * Afficher le formulaire d’édition.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Mettre à jour le produit.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'image'       => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l’ancienne image si elle existe
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('products.index')
            ->with('success', 'Produit mis à jour avec succès.');
    }

    /**
     * Supprimer un produit.
     */
    public function destroy(Product $product)
    {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index') ->with('success', 'Produit supprimé avec succès.');
    }
}
