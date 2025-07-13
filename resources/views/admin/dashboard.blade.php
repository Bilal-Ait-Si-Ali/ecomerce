@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Titre -->
    <div class="col-12 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1><i class="bi bi-speedometer2"></i> Dashboard Admin</h1>
            <div>
                <span class="badge bg-success">En ligne</span>
                <small class="text-muted">Dernière mise à jour: maintenant</small>
            </div>
        </div>
        <hr>
    </div>

    <!-- Statistiques principales -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">25</h4>
                        <p class="mb-1">Produits</p>
                        <small class="opacity-75">+3 ce mois</small>
                    </div>
                    <div class="align-self-center">
                        <i class="bi bi-box-seam display-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">142</h4>
                        <p class="mb-1">Commandes</p>
                        <small class="opacity-75">+18 aujourd'hui</small>
                    </div>
                    <div class="align-self-center">
                        <i class="bi bi-cart-check display-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card bg-warning text-dark h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">12,580€</h4>
                        <p class="mb-1">Revenus</p>
                        <small class="opacity-75">+5.2% vs hier</small>
                    </div>
                    <div class="align-self-center">
                        <i class="bi bi-currency-euro display-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card bg-info text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">89</h4>
                        <p class="mb-1">Clients</p>
                        <small class="opacity-75">+12 cette semaine</small>
                    </div>
                    <div class="align-self-center">
                        <i class="bi bi-people display-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques -->
    <div class="col-lg-8 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Ventes des 7 derniers jours</h5>
            </div>
            <div class="card-body">
                <canvas id="salesChart" height="300"></canvas>
                <!-- Simulation graphique avec CSS -->
                <div class="row text-center mt-3">
                    <div class="col">
                        <div class="bg-primary" style="height: 60px; margin-bottom: 5px;"></div>
                        <small>Lun</small>
                    </div>
                    <div class="col">
                        <div class="bg-primary" style="height: 80px; margin-bottom: 5px;"></div>
                        <small>Mar</small>
                    </div>
                    <div class="col">
                        <div class="bg-primary" style="height: 45px; margin-bottom: 5px;"></div>
                        <small>Mer</small>
                    </div>
                    <div class="col">
                        <div class="bg-primary" style="height: 90px; margin-bottom: 5px;"></div>
                        <small>Jeu</small>
                    </div>
                    <div class="col">
                        <div class="bg-primary" style="height: 70px; margin-bottom: 5px;"></div>
                        <small>Ven</small>
                    </div>
                    <div class="col">
                        <div class="bg-primary" style="height: 100px; margin-bottom: 5px;"></div>
                        <small>Sam</small>
                    </div>
                    <div class="col">
                        <div class="bg-primary" style="height: 85px; margin-bottom: 5px;"></div>
                        <small>Dim</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions rapides -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Actions rapides</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                   <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                       <i class="bi bi-plus-circle"></i> Ajouter un produit
                   </button>
                   <a href="/admin/products" class="btn btn-outline-primary">
                       <i class="bi bi-box-seam"></i> Gérer les produits
                   </a>
                   <a href="/admin/orders" class="btn btn-outline-success">
                       <i class="bi bi-list-check"></i> Voir les commandes
                   </a>
                   <button class="btn btn-outline-info">
                       <i class="bi bi-graph-up"></i> Rapports
                   </button>
                   <a href="/" class="btn btn-outline-secondary">
                       <i class="bi bi-house"></i> Voir le site
                   </a>
               </div>
           </div>
       </div>

       <!-- Alertes -->
       <div class="card mt-3">
           <div class="card-header">
               <h6 class="mb-0">Alertes importantes</h6>
           </div>
           <div class="card-body">
               <div class="alert alert-warning alert-sm mb-2">
                   <i class="bi bi-exclamation-triangle"></i>
                   <strong>3 produits</strong> en rupture de stock
               </div>
               <div class="alert alert-info alert-sm mb-2">
                   <i class="bi bi-clock"></i>
                   <strong>5 commandes</strong> en attente de traitement
               </div>
               <div class="alert alert-success alert-sm mb-0">
                   <i class="bi bi-check-circle"></i>
                   Sauvegarde automatique <strong>OK</strong>
               </div>
           </div>
       </div>
   </div>

   <!-- Commandes récentes -->
   <div class="col-lg-8">
       <div class="card">
           <div class="card-header d-flex justify-content-between">
               <h5 class="mb-0">Commandes récentes</h5>
               <a href="/admin/orders" class="btn btn-sm btn-outline-primary">Voir tout</a>
           </div>
           <div class="card-body">
               <div class="table-responsive">
                   <table class="table table-hover">
                       <thead class="table-light">
                           <tr>
                               <th>#</th>
                               <th>Client</th>
                               <th>Produits</th>
                               <th>Total</th>
                               <th>Statut</th>
                               <th>Date</th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td><strong>#CMD-001</strong></td>
                               <td>
                                   <div>
                                       <strong>Jean Dupont</strong><br>
                                       <small class="text-muted">jean.dupont@email.com</small>
                                   </div>
                               </td>
                               <td>MacBook Pro, iPhone 15</td>
                               <td><strong>2999.98€</strong></td>
                               <td><span class="badge bg-success">Confirmée</span></td>
                               <td>13/07/2025<br><small>14:30</small></td>
                               <td>
                                   <div class="btn-group btn-group-sm">
                                       <button class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Voir détail">
                                           <i class="bi bi-eye"></i>
                                       </button>
                                       <button class="btn btn-outline-warning" data-bs-toggle="tooltip" title="Modifier">
                                           <i class="bi bi-pencil"></i>
                                       </button>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td><strong>#CMD-002</strong></td>
                               <td>
                                   <div>
                                       <strong>Marie Martin</strong><br>
                                       <small class="text-muted">marie.martin@email.com</small>
                                   </div>
                               </td>
                               <td>AirPods Pro</td>
                               <td><strong>299.99€</strong></td>
                               <td><span class="badge bg-warning">En attente</span></td>
                               <td>13/07/2025<br><small>12:15</small></td>
                               <td>
                                   <div class="btn-group btn-group-sm">
                                       <button class="btn btn-outline-primary">
                                           <i class="bi bi-eye"></i>
                                       </button>
                                       <button class="btn btn-outline-warning">
                                           <i class="bi bi-pencil"></i>
                                       </button>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td><strong>#CMD-003</strong></td>
                               <td>
                                   <div>
                                       <strong>Pierre Durand</strong><br>
                                       <small class="text-muted">pierre.durand@email.com</small>
                                   </div>
                               </td>
                               <td>iPhone 15 (x2)</td>
                               <td><strong>1999.98€</strong></td>
                               <td><span class="badge bg-info">Expédiée</span></td>
                               <td>12/07/2025<br><small>16:45</small></td>
                               <td>
                                   <div class="btn-group btn-group-sm">
                                       <button class="btn btn-outline-primary">
                                           <i class="bi bi-eye"></i>
                                       </button>
                                       <button class="btn btn-outline-info">
                                           <i class="bi bi-truck"></i>
                                       </button>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td><strong>#CMD-004</strong></td>
                               <td>
                                   <div>
                                       <strong>Sophie Leroy</strong><br>
                                       <small class="text-muted">sophie.leroy@email.com</small>
                                   </div>
                               </td>
                               <td>MacBook Air</td>
                               <td><strong>1299.99€</strong></td>
                               <td><span class="badge bg-success">Livrée</span></td>
                               <td>11/07/2025<br><small>09:20</small></td>
                               <td>
                                   <div class="btn-group btn-group-sm">
                                       <button class="btn btn-outline-primary">
                                           <i class="bi bi-eye"></i>
                                       </button>
                                       <button class="btn btn-outline-success">
                                           <i class="bi bi-check-circle"></i>
                                       </button>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>

   <!-- Produits en stock faible -->
   <div class="col-lg-4">
       <div class="card">
           <div class="card-header d-flex justify-content-between">
               <h5 class="mb-0">Stock faible</h5>
               <span class="badge bg-danger">3</span>
           </div>
           <div class="card-body">
               <div class="d-flex justify-content-between align-items-center mb-3 p-2 bg-light rounded">
                   <div class="d-flex align-items-center">
                       <i class="bi bi-smartwatch text-muted me-2"></i>
                       <div>
                           <h6 class="mb-0">Apple Watch</h6>
                           <small class="text-muted">Série 9</small>
                       </div>
                   </div>
                   <span class="badge bg-danger">0</span>
               </div>
               
               <div class="d-flex justify-content-between align-items-center mb-3 p-2 bg-light rounded">
                   <div class="d-flex align-items-center">
                       <i class="bi bi-tablet text-muted me-2"></i>
                       <div>
                           <h6 class="mb-0">iPad Pro</h6>
                           <small class="text-muted">11 pouces</small>
                       </div>
                   </div>
                   <span class="badge bg-warning">2</span>
               </div>
               
               <div class="d-flex justify-content-between align-items-center mb-3 p-2 bg-light rounded">
                   <div class="d-flex align-items-center">
                       <i class="bi bi-laptop text-muted me-2"></i>
                       <div>
                           <h6 class="mb-0">MacBook Air</h6>
                           <small class="text-muted">13 pouces</small>
                       </div>
                   </div>
                   <span class="badge bg-warning">3</span>
               </div>
               
               <button class="btn btn-outline-primary btn-sm w-100">
                   <i class="bi bi-plus-circle"></i> Réapprovisionner
               </button>
           </div>
       </div>

       <!-- Top produits -->
       <div class="card mt-3">
           <div class="card-header">
               <h6 class="mb-0">Produits populaires</h6>
           </div>
           <div class="card-body">
               <div class="d-flex justify-content-between align-items-center mb-2">
                   <div class="d-flex align-items-center">
                       <i class="bi bi-phone text-primary me-2"></i>
                       <small>iPhone 15</small>
                   </div>
                   <small class="fw-bold">45 ventes</small>
               </div>
               <div class="progress mb-3" style="height: 5px;">
                   <div class="progress-bar" style="width: 90%"></div>
               </div>
               
               <div class="d-flex justify-content-between align-items-center mb-2">
                   <div class="d-flex align-items-center">
                       <i class="bi bi-laptop text-primary me-2"></i>
                       <small>MacBook Pro</small>
                   </div>
                   <small class="fw-bold">32 ventes</small>
               </div>
               <div class="progress mb-3" style="height: 5px;">
                   <div class="progress-bar" style="width: 64%"></div>
               </div>
               
               <div class="d-flex justify-content-between align-items-center mb-2">
                   <div class="d-flex align-items-center">
                       <i class="bi bi-headphones text-primary me-2"></i>
                       <small>AirPods Pro</small>
                   </div>
                   <small class="fw-bold">28 ventes</small>
               </div>
               <div class="progress" style="height: 5px;">
                   <div class="progress-bar" style="width: 56%"></div>
               </div>
           </div>
       </div>
   </div>
</div>

<!-- Modal Ajouter Produit -->
<div class="modal fade" id="addProductModal" tabindex="-1">
   <div class="modal-dialog modal-lg">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title">Ajouter un nouveau produit</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
           </div>
           <form onsubmit="addProduct(event)">
               <div class="modal-body">
                   <div class="row">
                       <div class="col-md-6 mb-3">
                           <label for="productName" class="form-label">Nom du produit *</label>
                           <input type="text" class="form-control" id="productName" required placeholder="Ex: iPhone 15 Pro">
                       </div>
                       <div class="col-md-6 mb-3">
                           <label for="productPrice" class="form-label">Prix (€) *</label>
                           <input type="number" class="form-control" id="productPrice" step="0.01" required placeholder="999.99">
                       </div>
                       <div class="col-md-6 mb-3">
                           <label for="productStock" class="form-label">Stock *</label>
                           <input type="number" class="form-control" id="productStock" required placeholder="10">
                       </div>
                       <div class="col-md-6 mb-3">
                           <label for="productCategory" class="form-label">Catégorie</label>
                           <select class="form-select" id="productCategory">
                               <option value="">Sélectionner...</option>
                               <option value="smartphones">Smartphones</option>
                               <option value="ordinateurs">Ordinateurs</option>
                               <option value="accessoires">Accessoires</option>
                               <option value="tablettes">Tablettes</option>
                           </select>
                       </div>
                       <div class="col-12 mb-3">
                           <label for="productDescription" class="form-label">Description</label>
                           <textarea class="form-control" id="productDescription" rows="3" placeholder="Description détaillée du produit..."></textarea>
                       </div>
                       <div class="col-12 mb-3">
                           <label for="productImage" class="form-label">Image</label>
                           <input type="file" class="form-control" id="productImage" accept="image/*">
                           <small class="text-muted">Formats acceptés: JPG, PNG, WebP (max 2MB)</small>
                       </div>
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                   <button type="submit" class="btn btn-primary">
                       <i class="bi bi-plus-circle"></i> Ajouter le produit
                   </button>
               </div>
           </form>
       </div>
   </div>
</div>
@endsection

@section('scripts')
<script>
// Initialiser les tooltips
document.addEventListener('DOMContentLoaded', function () {
   var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
   var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
       return new bootstrap.Tooltip(tooltipTriggerEl);
   });
});

function addProduct(event) {
   event.preventDefault();
   
   const name = document.getElementById('productName').value;
   const price = document.getElementById('productPrice').value;
   const stock = document.getElementById('productStock').value;
   
   if (name && price && stock) {
       alert(`Produit "${name}" ajouté avec succès !`);
       
       // Fermer le modal
       const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
       modal.hide();
       
       // Réinitialiser le formulaire
       event.target.reset();
       
       // Simulation d'ajout à la liste (dans un vrai projet, on ferait un appel API)
       console.log('Nouveau produit:', { name, price, stock });
   }
}

// Simulation de mise à jour en temps réel
setInterval(function() {
   const badges = document.querySelectorAll('.badge');
   // Animation subtile pour simuler des mises à jour
   badges.forEach(badge => {
       if (Math.random() > 0.9) {
           badge.style.animation = 'pulse 0.5s';
           setTimeout(() => badge.style.animation = '', 500);
       }
   });
}, 5000);
</script>

<style>
@keyframes pulse {
   0% { transform: scale(1); }
   50% { transform: scale(1.1); }
   100% { transform: scale(1); }
}

.alert-sm {
   padding: 0.5rem;
   font-size: 0.875rem;
}
</style>
@endsection