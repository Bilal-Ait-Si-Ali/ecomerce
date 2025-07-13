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

    <!-- Produit 1 - MacBook Pro -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                <i class="bi bi-laptop text-muted" style="font-size: 3rem;"></i>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">MacBook Pro 16"</h5>
                <p class="card-text text-muted flex-grow-1">Ordinateur portable puissant avec puce M3 Pro pour les professionnels</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="h5 text-primary mb-0">1999.99€</span>
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
                    <button class="btn btn-primary w-100" onclick="addToCart(1)">
                        <i class="bi bi-cart-plus"></i> Ajouter au panier
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Produit 2 - iPhone 15 -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                <i class="bi bi-phone text-muted" style="font-size: 3rem;"></i>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">iPhone 15</h5>
                <p class="card-text text-muted flex-grow-1">Le dernier smartphone d'Apple avec toutes les innovations technologiques</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="h5 text-primary mb-0">999.99€</span>
                    <small class="text-success">
                        <i class="bi bi-check-circle"></i> En stock
                    </small>
                </div>
            </div>
            <div class="card-footer bg-transparent">
                <div class="d-grid gap-2">
                    <a href="/product/2" class="btn btn-outline-primary">
                        <i class="bi bi-eye"></i> Voir détail
                    </a>
                    <button class="btn btn-primary w-100" onclick="addToCart(2)">
                        <i class="bi bi-cart-plus"></i> Ajouter au panier
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Produit 3 - AirPods Pro -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                <i class="bi bi-headphones text-muted" style="font-size: 3rem;"></i>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">AirPods Pro</h5>
                <p class="card-text text-muted flex-grow-1">Écouteurs sans fil avec réduction de bruit active et audio spatial</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="h5 text-primary mb-0">299.99€</span>
                    <small class="text-success">
                        <i class="bi bi-check-circle"></i> En stock
                    </small>
                </div>
            </div>
            <div class="card-footer bg-transparent">
                <div class="d-grid gap-2">
                    <a href="/product/3" class="btn btn-outline-primary">
                        <i class="bi bi-eye"></i> Voir détail
                    </a>
                    <button class="btn btn-primary w-100" onclick="addToCart(3)">
                        <i class="bi bi-cart-plus"></i> Ajouter au panier
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Produit 4 - Apple Watch -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                <i class="bi bi-smartwatch text-muted" style="font-size: 3rem;"></i>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Apple Watch Series 9</h5>
                <p class="card-text text-muted flex-grow-1">Montre connectée avec suivi de santé et fitness avancé</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="h5 text-primary mb-0">449.99€</span>
                    <small class="text-danger">
                        <i class="bi bi-x-circle"></i> Rupture
                    </small>
                </div>
            </div>
            <div class="card-footer bg-transparent">
                <div class="d-grid gap-2">
                    <a href="/product/4" class="btn btn-outline-primary">
                        <i class="bi bi-eye"></i> Voir détail
                    </a>
                    <button class="btn btn-secondary w-100" disabled>
                        <i class="bi bi-x-circle"></i> Indisponible
                    </button>
                </div>
            </div>
        </div>
    </div>
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
function addToCart(productId) {
    // Simulation d'ajout au panier
    const alert = document.querySelector('.alert-success');
    alert.style.display = 'block';
    setTimeout(() => {
        alert.style.display = 'none';
    }, 3000);
}
</script>
@endsection