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

                         @foreach ($cart as $item)


                

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3 bg-light d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="bi bi-laptop text-muted"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">{{ $item['name'] }}</h6>
                                          <!--  <small class="text-muted">Puce M3 Pro, 18GB RAM</small> --> 
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="fw-bold">{{ $item['price'] }} MAD</span>
                                </td>
                                <td class="align-middle">
                                    <div class="input-group" style="width: 120px;">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(1, -1)">-</button>
                                        <input type="number" class="form-control form-control-sm text-center" value="{{ $item['quantity'] }}" min="1" max="50" id="qty-1">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(1, 1)">+</button>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="fw-bold text-primary" id="total-1">{{ $item['price'] * $item['quantity'] }} MAD</span>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-outline-danger btn-sm" onclick="removeFromCart(1)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            @endforeach
                                                        



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

    </div>

    <!-- Résumé commande -->
    <div class="col-lg-4">
        <div class="card sticky-top" style="top: 20px;">
            <div class="card-header">
                <h5 class="mb-0">Résumé de la commande</h5>
            </div>
            <div class="card-body">

                <div class="d-flex justify-content-between mb-2">
                    <span>Sous-total (3 articles):</span>
                    <span id="subtotal">5000.00 MAD</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>Livraison:</span>
                    <span class="text-success">Gratuite</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>TVA (10%):</span>
                    <span id="tax">500.00MAD</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between mb-3">
                    <span class="fw-bold">Total TTC:</span>
                    <span class="fw-bold text-primary h5" id="total">5500.00 MAD</span>
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
    document.getElementById(`total-${productId}`).textContent = newTotal + 'mad';
    
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
    
    document.getElementById('subtotal').textContent = total.toFixed(2) + 'mad';
    document.getElementById('total').textContent = total.toFixed(2) + 'mad';
    document.getElementById('tax').textContent = (total * 0.2).toFixed(2) + 'mad';
}
</script>
@endsection
                                        