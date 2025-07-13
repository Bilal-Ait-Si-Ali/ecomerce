@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Titre -->
    <div class="col-12 mb-4">
        <h1><i class="bi bi-credit-card"></i> Finaliser la commande</h1>
        <hr>
    </div>

    <!-- Étapes de commande -->
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="text-success">
                            <i class="bi bi-check-circle display-6"></i>
                            <h6 class="mt-2">Panier</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-primary">
                            <i class="bi bi-person-circle display-6"></i>
                            <h6 class="mt-2">Informations</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-muted">
                            <i class="bi bi-credit-card-2-front display-6"></i>
                            <h6 class="mt-2">Paiement</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-muted">
                            <i class="bi bi-check-square display-6"></i>
                            <h6 class="mt-2">Confirmation</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form>
        <!-- Informations client -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-person"></i> Informations de livraison</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">Prénom *</label>
                            <input type="text" class="form-control" id="firstName" value="Jean" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Nom *</label>
                            <input type="text" class="form-control" id="lastName" value="Dupont" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" value="jean.dupont@email.com" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="phone" value="06.12.34.56.78">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="address" class="form-label">Adresse *</label>
                            <input type="text" class="form-control" id="address" value="123 Rue de la Paix" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label">Ville *</label>
                            <input type="text" class="form-control" id="city" value="Paris" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zipCode" class="form-label">Code postal *</label>
                            <input type="text" class="form-control" id="zipCode" value="75001" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="country" class="form-label">Pays *</label>
                            <select class="form-select" id="country" required>
                                <option value="FR" selected>France</option>
                                <option value="BE">Belgique</option>
                                <option value="CH">Suisse</option>
                                <option value="CA">Canada</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mode de livraison -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-truck"></i> Mode de livraison</h5>
                </div>
                <div class="card-body">
                    <div class="form-check border rounded p-3 mb-3">
                        <input class="form-check-input" type="radio" name="shipping" id="standard" checked>
                        <label class="form-check-label w-100" for="standard">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Livraison standard</strong><br>
                                    <small class="text-muted">3-5 jours ouvrés</small>
                                </div>
                                <span class="text-success fw-bold">Gratuite</span>
                            </div>
                        </label>
                    </div>
                    
                    <div class="form-check border rounded p-3 mb-3">
                        <input class="form-check-input" type="radio" name="shipping" id="express">
                        <label class="form-check-label w-100" for="express">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Livraison express</strong><br>
                                    <small class="text-muted">24-48h</small>
                                </div>
                                <span class="fw-bold">9.99€</span>
                            </div>
                        </label>
                    </div>

                    <div class="form-check border rounded p-3">
                        <input class="form-check-input" type="radio" name="shipping" id="pickup">
                        <label class="form-check-label w-100" for="pickup">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Retrait en magasin</strong><br>
                                    <small class="text-muted">Disponible sous 2h</small>
                                </div>
                                <span class="text-success fw-bold">Gratuite</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Mode de paiement -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-credit-card-2-front"></i> Mode de paiement</h5>
                </div>
                <div class="card-body">
                    <div class="form-check border rounded p-3 mb-3">
                        <input class="form-check-input" type="radio" name="payment" id="card" checked>
                        <label class="form-check-label w-100" for="card">
                            <i class="bi bi-credit-card text-primary me-2"></i>
                            <strong>Carte bancaire</strong>
                            <div class="mt-2" id="cardForm">
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <input type="text" class="form-control" placeholder="Numéro de carte" value="**** **** **** 1234">
                                    </div>
                                    <div class="col-6 mb-2">
                                        <input type="text" class="form-control" placeholder="MM/AA" value="12/28">
                                    </div>
                                    <div class="col-6 mb-2">
                                        <input type="text" class="form-control" placeholder="CVV" value="***">
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                    
                    <div class="form-check border rounded p-3 mb-3">
                        <input class="form-check-input" type="radio" name="payment" id="paypal">
                        <label class="form-check-label" for="paypal">
                            <i class="bi bi-paypal text-primary me-2"></i>
                            <strong>PayPal</strong>
                        </label>
                    </div>

                    <div class="form-check border rounded p-3">
                        <input class="form-check-input" type="radio" name="payment" id="bank">
                        <label class="form-check-label" for="bank">
                            <i class="bi bi-bank text-primary me-2"></i>
                            <strong>Virement bancaire</strong>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Conditions -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="terms" required>
                        <label class="form-check-label" for="terms">
                            J'accepte les <a href="#" class="text-primary">conditions générales de vente</a> *
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="privacy" required>
                        <label class="form-check-label" for="privacy">
                            J'accepte la <a href="#" class="text-primary">politique de confidentialité</a> *
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="newsletter">
                        <label class="form-check-label" for="newsletter">
                            Je souhaite recevoir les offres promotionnelles par email
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Résumé commande -->
        <div class="col-lg-4">
            <div class="card sticky-top" style="top: 20px;">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-list-check"></i> Votre commande</h5>
                </div>
                <div class="card-body">
                    <!-- Produit 1 -->
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex">
                            <div class="bg-light d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px;">
                                <i class="bi bi-laptop text-muted small"></i>
                            </div>
                            <div>
                                <small class="fw-bold">MacBook Pro</small><br>
                                <small class="text-muted">Qté: 1</small>
                            </div>
                        </div>
                        <small class="fw-bold">1999.99€</small>
                    </div>
                    <hr class="my-2">

                    <!-- Produit 2 -->
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex">
                            <div class="bg-light d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px;">
                                <i class="bi bi-phone text-muted small"></i>
                            </div>
                            <div>
                                <small class="fw-bold">iPhone 15</small><br>
                                <small class="text-muted">Qté: 2</small>
                            </div>
                        </div>
                        <small class="fw-bold">1999.98€</small>
                    </div>
                    <hr class="my-2">

                    <!-- Produit 3 -->
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex">
                            <div class="bg-light d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px;">
                                <i class="bi bi-headphones text-muted small"></i>
                            </div>
                            <div>
                                <small class="fw-bold">AirPods Pro</small><br>
                                <small class="text-muted">Qté: 1</small>
                            </div>
                        </div>
                        <small class="fw-bold">299.99€</small>
                    </div>
                    <hr>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span>Sous-total:</span>
                        <span>4299.96€</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Livraison:</span>
                        <span class="text-success" id="shippingCost">Gratuite</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>TVA (20%):</span>
                        <span>860.00€</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="fw-bold">Total TTC:</span>
                        <span class="fw-bold text-primary h5" id="finalTotal">4299.96€</span>
                    </div>
                    
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-success btn-lg" onclick="processOrder()">
                            <i class="bi bi-check-circle"></i> Confirmer la commande
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <a href="/cart" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Retour au panier
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sécurité -->
            <div class="card mt-3">
                <div class="card-body text-center">
                    <i class="bi bi-shield-check text-success display-6"></i>
                    <h6 class="mt-2">Paiement sécurisé</h6>
                    <small class="text-muted">Vos données sont cryptées et protégées</small>
                    <div class="mt-2">
                        <img src="https://via.placeholder.com/40x25/007bff/ffffff?text=VISA" class="me-1">
                        <img src="https://via.placeholder.com/40x25/ff6b35/ffffff?text=MC" class="me-1">
                        <img src="https://via.placeholder.com/40x25/28a745/ffffff?text=PP">
                    </div>
                </div>
            </div>

            <!-- Support -->
            <div class="card mt-3">
                <div class="card-body">
                    <h6><i class="bi bi-headset"></i> Besoin d'aide ?</h6>
                    <p class="small mb-2">Notre équipe est là pour vous aider</p>
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-chat-dots"></i> Chat en direct
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
function processOrder() {
    event.preventDefault();
    
    // Vérifier les conditions
    const terms = document.getElementById('terms').checked;
    const privacy = document.getElementById('privacy').checked;
    
    if (!terms || !privacy) {
        alert('Vous devez accepter les conditions générales et la politique de confidentialité');
        return;
    }
    
    // Simulation de traitement
    alert('Commande confirmée ! Redirection vers la page de confirmation...');
    window.location.href = '/order-success';
}

// Mettre à jour le coût de livraison
document.querySelectorAll('input[name="shipping"]').forEach(radio => {
    radio.addEventListener('change', function() {
        const shippingCost = document.getElementById('shippingCost');
        const finalTotal = document.getElementById('finalTotal');
        
        if (this.id === 'express') {
            shippingCost.textContent = '9.99€';
            shippingCost.className = 'fw-bold';
            finalTotal.textContent = '4309.95€';
        } else {
            shippingCost.textContent = 'Gratuite';
            shippingCost.className = 'text-success';
            finalTotal.textContent = '4299.96€';
        }
    });
});

// Afficher/cacher les champs de carte
document.querySelectorAll('input[name="payment"]').forEach(radio => {
    radio.addEventListener('change', function() {
        const cardForm = document.getElementById('cardForm');
        if (this.id === 'card') {
            cardForm.style.display = 'block';
        } else {
            cardForm.style.display = 'none';
        }
    });
});
</script>
@endsection