@extends('layouts.app')

@section('title', 'Bienvenue - Ma Boutique')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="jumbotron bg-primary text-white text-center py-5 rounded mb-5">
            <h1 class="display-3 fw-bold">🛍️ Ma Boutique</h1>
            <p class="lead fs-4">Découvrez notre sélection de produits exceptionnels</p>
            <hr class="my-4 border-light">
            <p class="mb-4">Une expérience de shopping en ligne moderne et sécurisée</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="{{ route('home') }}" class="btn btn-light btn-lg me-md-2">
                    <i class="bi bi-house"></i> Accueil
                </a>
                <a href="{{ route('products.index') }}" class="btn btn-outline-light btn-lg">
                    <i class="bi bi-shop"></i> Voir les produits
                </a>
            </div>
        </div>
    </div>

    <!-- Fonctionnalités -->
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
                <i class="bi bi-truck display-1 text-primary mb-3"></i>
                <h4>Livraison Gratuite</h4>
                <p class="text-muted">Livraison offerte dès le premier achat</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
                <i class="bi bi-shield-check display-1 text-success mb-3"></i>
                <h4>Paiement Sécurisé</h4>
                <p class="text-muted">Vos données sont protégées</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
                <i class="bi bi-arrow-clockwise display-1 text-warning mb-3"></i>
                <h4>Retour Facile</h4>
                <p class="text-muted">Satisfait ou remboursé sous 30 jours</p>
            </div>
        </div>
    </div>
</div>
@endsection