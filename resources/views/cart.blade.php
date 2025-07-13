@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Titre -->
    <div class="col-12 mb-4">
        <h1><i class="bi bi-cart3"></i> Mon Panier</h1>
        <hr>
    </div>

    <!-- Contenu du panier -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Articles dans votre panier (3 articles)</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Produit</th>
                                <th width="120">Prix unitaire</th>
                                <th width="120">Quantité</th>
                                <th width="120">Total</th>
                                <th width="60">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Produit 1 - MacBook Pro -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3 bg-light d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="bi bi-laptop text-muted"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">MacBook Pro 16"</h6>
                                            <small class="text-muted">Puce M3 Pro, 18GB RAM</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="fw-bold">1999.99€</span>
                                </td>
                                <td class="align-middle">
                                    <div class="input-group" style="width: 120px;">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(1, -1)">-</button>
                                        <input type="number" class="form-control form-control-sm text-center" value="1" min="1" max="10" id="qty-1">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(1, 1)">+</button>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="fw-bold text-primary" id="total-1">1999.99€</span>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-outline-danger btn-sm" onclick="removeFromCart(1)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Produit 2 - iPhone 15 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3 bg-light d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="bi bi-phone text-muted"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">iPhone 15</h6>
                                            <small class="text-muted">128GB, Bleu</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="fw-bold">999.99€</span>
                                </td>
                                <td class="align-middle">
                                    <div class="input-group" style="width: 120px;">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(2, -1)">-</button>
                                        <input type="number" class="form-control form-control-sm text-center" value="2" min="1" max="10" id="qty-2">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(2, 1)">+</button>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="fw-bold text-primary" id="total-2">1999.98€</span>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-outline-danger btn-sm" onclick="removeFromCart(2)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Produit 3 - AirPods Pro -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3 bg-light d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="bi bi-headphones text-muted"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">AirPods Pro</h6>
                                            <small class="text-muted">2ème génération</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="fw-bold">299.99€</span>
                                </td>
                                <td class="align-middle">
                                    <div class="input-group" style="width: 120px;">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(3, -1)">-</button>
                                        <input type="number" class="form-control form-control-sm text-center" value="1" min="1" max="10" id="qty-3">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(3, 1)">+</button>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="fw-bold text-primary" id="total-3">299.99€</span>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-outline-danger btn-sm" onclick="removeFromCart(3)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Actions panier -->
        <div class="d-flex justify-content-between mt-3">
            <a href="/" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> Continuer les achats
            </a>
            <button class="btn btn-outline-danger" onclick="clearCart()">
                <i class="bi bi-trash"></i> Vider le panier
            </button>
        </div>

        <!-- Codes promo -->
        <div class="card mt-4">
            <div class="card-header">
                <h6 class="mb-0">Code promo</h6>
            </div>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Entrer votre code promo">
                    <button class="btn btn-outline-secondary">Appliquer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Résumé commande -->
    <div class="col-lg-4">
        <div class="card sticky-top" style="top: 20px;">
            <div class="card-header">
                <h5 class="mb-0">Résumé de la commande</h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                    <span>Sous-total (4 articles):</span>
                    <span id="subtotal">4299.96€</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>Livraison:</span>
                    <span class="text-success">Gratuite</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>TVA (20%):</span>
                    <span id="tax">860.00€</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between mb-3">
                    <span class="fw-bold">Total TTC:</span>
                    <span class="fw-bold text-primary h5" id="total">4299.96€</span>
                </div>
                
                <div class="d-grid mb-3">
                    <a href="/checkout" class="btn btn-primary btn-lg">
                        <i class="bi bi-credit-card"></i> Passer la commande
                    </a>
                </div>

                <!-- Paiement sécurisé -->
                <div class="text-center small text-muted">
                    <i class="bi bi-shield-check text-success"></i>
                    Paiement 100% sécurisé
                </div>
            </div>
        </div>

        <!-- Informations livraison -->
        <div class="card mt-3">
            <div class="card-body">
                <h6><i class="bi bi-truck"></i> Livraison</h6>
                <ul class="list-unstyled mb-0 small">
                    <li><i class="bi bi-check text-success"></i> Livraison gratuite</li>
                    <li><i class="bi bi-check text-success"></i> Expédition sous 24h</li>
                    <li><i class="bi bi-check text-success"></i> Suivi de commande</li>
                </ul>
                <hr class="my-2">
                <h6><i class="bi bi-arrow-clockwise"></i> Retours</h6>
                <ul class="list-unstyled mb-0 small">
                    <li><i class="bi bi-check text-success"></i> Retour sous 30 jours</li>
                    <li><i class="bi bi-check text-success"></i> Remboursement rapide</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
const prices = {
    1: 1999.99,
    2: 999.99,
    3: 299.99
};

function updateQuantity(productId, change) {
    const qtyInput = document.getElementById(`qty-${productId}`);
    let newQty = parseInt(qtyInput.value) + change;
    
    if (newQty < 1) newQty = 1;
    if (newQty > 10) newQty = 10;
    
    qtyInput.value = newQty;
    
    // Mettre à jour le total du produit
    const newTotal = (prices[productId] * newQty).toFixed(2);
    document.getElementById(`total-${productId}`).textContent = newTotal + '€';
    
    updateCartTotal();
}

function removeFromCart(productId) {
    if (confirm('Supprimer cet article du panier ?')) {
        document.querySelector(`#qty-${productId}`).closest('tr').remove();
        updateCartTotal();
        alert('Article supprimé du panier');
    }
}

function clearCart() {
    if (confirm('Vider tout le panier ?')) {
        document.querySelector('tbody').innerHTML = `
            <tr>
                <td colspan="5" class="text-center py-5">
                    <i class="bi bi-cart-x display-1 text-muted"></i>
                    <h5 class="mt-3">Votre panier est vide</h5>
                    <a href="/" class="btn btn-primary">Continuer les achats</a>
                </td>
            </tr>
        `;
        updateCartTotal();
    }
}

function updateCartTotal() {
    let total = 0;
    document.querySelectorAll('[id^="qty-"]').forEach(input => {
        const productId = input.id.split('-')[1];
        const qty = parseInt(input.value);
        if (prices[productId]) {
            total += prices[productId] * qty;
        }
    });
    
    document.getElementById('subtotal').textContent = total.toFixed(2) + '€';
    document.getElementById('total').textContent = total.toFixed(2) + '€';
    document.getElementById('tax').textContent = (total * 0.2).toFixed(2) + '€';
}
</script>
@endsection
                                        