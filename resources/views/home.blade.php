@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Hero Section -->
    <div class="col-12 mb-5">
        <div class="bg-gradient bg-primary text-white text-center py-5 rounded">
            <h1 class="display-4 fw-bold">Bienvenue dans Ma Boutique</h1>
            <p class="lead">Découvrez nos produits exceptionnels</p>
            <a href="#products" class="btn btn-light btn-lg">
                <i class="bi bi-arrow-right"></i> Voir les produits
            </a>
        </div>
    </div>

    <!-- Titre produits -->
    <div class="col-12 mb-4" id="products">
        <h2 class="text-center">Produits Populaires</h2>
        <hr class="w-25 mx-auto">
    </div>


    @foreach ($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-muted flex-grow-1">{{ $product->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="h5 text-primary mb-0">{{ $product->price }} Mad</span>
                        <small class="text-success">
                            <i class="bi bi-check-circle"></i> En stock
                        </small>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-grid gap-2">
                        <a href="/product/1" class="btn btn-outline-primary">
                            <i class="bi bi-eye"></i> Voir détail
                        </a>
                        <button class="btn btn-primary w-100" onclick="addToCartFromProduct({{ $product->id }})">
                            <i class="bi bi-cart-plus"></i> Ajouter au panier
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

 <!-- Pagination Links -->
    <div class="d-flex justify-content-center mt-4">
       
        {{ $products->links() }}
    </div>



<!-- Section avantages -->
<div class="row mt-5 py-5 bg-light rounded">
    <div class="col-12 mb-4">
        <h3 class="text-center">Pourquoi choisir Ma Boutique ?</h3>
    </div>
    <div class="col-md-4 text-center mb-3">
        <i class="bi bi-truck display-4 text-primary"></i>
        <h5 class="mt-3">Livraison gratuite</h5>
        <p class="text-muted">Livraison gratuite pour toutes les commandes</p>
    </div>
    <div class="col-md-4 text-center mb-3">
        <i class="bi bi-shield-check display-4 text-success"></i>
        <h5 class="mt-3">Paiement sécurisé</h5>
        <p class="text-muted">Vos données sont protégées</p>
    </div>
    <div class="col-md-4 text-center mb-3">
        <i class="bi bi-arrow-clockwise display-4 text-warning"></i>
        <h5 class="mt-3">Retour facile</h5>
        <p class="text-muted">Retour sous 30 jours</p>
    </div>
</div>
@endsection

@section('scripts')

<script>
async function addToCartFromProduct(productId) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    try {
        const response = await fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({
                product_id: productId,
                quantity: 1
            })
        });

        const data = await response.json();

        if (response.ok) {
            const toastBody = document.getElementById('cart-toast-body');
            toastBody.textContent = `${1} ${data.product_name} ajouté(s) au panier !`;

            const toastEl = document.getElementById('cart-toast');
            const toast = new bootstrap.Toast(toastEl, { delay: 3000 });
            toast.show();
            document.getElementById('cart-count').textContent = data.cart_count;
        } else {
            alert('Erreur: ' + (data.message || 'Une erreur est survenue.'));
        }
    } catch (error) {
        console.error(error);
        alert('Erreur réseau.');
    }
}

</script>

@endsection