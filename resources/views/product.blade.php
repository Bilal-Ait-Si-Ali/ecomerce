@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Breadcrumb -->
    <div class="col-12 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active">MacBook Pro 16"</li>
            </ol>
        </nav>
    </div>

    <!-- Image produit -->
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 400px;">
                <i class="bi bi-laptop text-muted" style="font-size: 8rem;"></i>
            </div>
        </div>
    </div>

    <!-- Détails produit -->
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h1 class="card-title">MacBook Pro 16"</h1>
                
                <!-- Prix -->
                <div class="mb-3">
                    <span class="h2 text-primary">1999.99€</span>
                    <small class="text-muted text-decoration-line-through ms-2">2199.99€</small>
                </div>

                <!-- Stock -->
                <div class="mb-3">
                    <span class="badge bg-success fs-6">
                        <i class="bi bi-check-circle"></i> En stock (5 disponibles)
                    </span>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <h5>Description</h5>
                    <p class="text-muted">
                        Le MacBook Pro 16 pouces redéfinit l'ordinateur portable professionnel. 
                        Avec sa puce M3 Pro révolutionnaire, son écran Liquid Retina XDR époustouflant 
                        et son autonomie exceptionnelle, il offre des performances inégalées pour 
                        les créatifs et les professionnels les plus exigeants.
                    </p>
                </div>

                <!-- Caractéristiques -->
                <div class="mb-4">
                    <h5>Caractéristiques principales</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check text-success"></i> Puce M3 Pro 12 cœurs</li>
                        <li><i class="bi bi-check text-success"></i> 18 GB de mémoire unifiée</li>
                        <li><i class="bi bi-check text-success"></i> SSD de 512 GB</li>
                        <li><i class="bi bi-check text-success"></i> Écran Liquid Retina XDR 16"</li>
                        <li><i class="bi bi-check text-success"></i> Autonomie jusqu'à 22 heures</li>
                        <li><i class="bi bi-check text-success"></i> Ports Thunderbolt 4</li>
                    </ul>
                </div>

                <!-- Actions -->
                <div class="row g-3 mb-4">
                    <div class="col-4">
                        <label for="quantity" class="form-label">Quantité</label>
                        <select class="form-select" id="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col-8 d-flex align-items-end">
                        <button type="button" class="btn btn-primary btn-lg w-100" onclick="addToCartFromProduct()">
                            <i class="bi bi-cart-plus"></i> Ajouter au panier
                        </button>
                    </div>
                </div>

                <!-- Boutons supplémentaires -->
                <div class="d-grid gap-2 d-md-flex mb-3">
                    <button class="btn btn-outline-danger">
                        <i class="bi bi-heart"></i> Ajouter aux favoris
                    </button>
                    <button class="btn btn-outline-info">
                        <i class="bi bi-share"></i> Partager
                    </button>
                </div>

                <!-- Navigation -->
                <div class="d-grid gap-2 d-md-flex">
                    <a href="/" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Retour aux produits
                    </a>
                    <a href="/cart" class="btn btn-outline-primary">
                        <i class="bi bi-cart3"></i> Voir le panier
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Informations complémentaires -->
<div class="row mt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button">
                            Spécifications
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button">
                            Avis clients
                        </button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <!-- Spécifications -->
                    <div class="tab-pane fade show active" id="specs">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Processeur</h6>
                                <p>Puce Apple M3 Pro avec CPU 12 cœurs</p>
                                
                                <h6>Mémoire</h6>
                                <p>18 GB de mémoire unifiée</p>
                                
                                <h6>Stockage</h6>
                                <p>SSD de 512 GB</p>
                            </div>
                            <div class="col-md-6">
                                <h6>Écran</h6>
                                <p>Liquid Retina XDR 16,2 pouces</p>
                                
                                <h6>Connectivité</h6>
                                <p>3x Thunderbolt 4, HDMI, Jack 3.5mm</p>
                                
                                <h6>Autonomie</h6>
                                <p>Jusqu'à 22 heures</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Avis clients -->
                    <div class="tab-pane fade" id="reviews">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <span class="h4">4.8</span>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <small class="text-muted">Basé sur 127 avis</small>
                        </div>
                        
                        <!-- Avis 1 -->
                        <div class="border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <strong>Jean D.</strong>
                                <small class="text-muted">12/07/2025</small>
                            </div>
                            <div class="text-warning small">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="mt-2 mb-0">Excellente machine, très performante pour le montage vidéo. L'écran est magnifique !</p>
                        </div>
                        
                        <!-- Avis 2 -->
                        <div class="border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <strong>Marie L.</strong>
                                <small class="text-muted">10/07/2025</small>
                            </div>
                            <div class="text-warning small">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <p class="mt-2 mb-0">Très bon produit, livraison rapide. Juste le prix qui est élevé mais la qualité est au rendez-vous.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Produits similaires -->
<div class="row mt-5">
    <div class="col-12">
        <h3>Produits similaires</h3>
        <hr>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 150px;">
                <i class="bi bi-laptop text-muted" style="font-size: 2rem;"></i>
            </div>
            <div class="card-body">
                <h6 class="card-title">MacBook Air</h6>
                <p class="text-primary fw-bold">1299.99€</p>
                <a href="/product/5" class="btn btn-sm btn-outline-primary">Voir détail</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 150px;">
                <i class="bi bi-tablet text-muted" style="font-size: 2rem;"></i>
            </div>
            <div class="card-body">
                <h6 class="card-title">iPad Pro</h6>
                <p class="text-primary fw-bold">1199.99€</p>
                <a href="/product/6" class="btn btn-sm btn-outline-primary">Voir détail</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function addToCartFromProduct() {
    const quantity = document.getElementById('quantity').value;
    alert(`${quantity} MacBook Pro ajouté(s) au panier !`);
    
    // Simulation d'ajout au panier
    const alert_el = document.querySelector('.alert-success');
    alert_el.style.display = 'block';
    setTimeout(() => {
        alert_el.style.display = 'none';
    }, 3000);
}
</script>
@endsection