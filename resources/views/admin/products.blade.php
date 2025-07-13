@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Titre et actions -->
    <div class="col-12 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1><i class="bi bi-box-seam"></i> Gestion des Produits</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                <i class="bi bi-plus-circle"></i> Ajouter un produit
            </button>
        </div>
        <hr>
    </div>

    <!-- Filtres et recherche -->
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Rechercher un produit...">
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option value="">Toutes les catégories</option>
                                <option value="electronique">Électronique</option>
                                <option value="informatique">Informatique</option>
                                <option value="accessoires">Accessoires</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option value="">Tous les stocks</option>
                                <option value="low">Stock faible (< 5)</option>
                                <option value="medium">Stock moyen (5-20)</option>
                                <option value="high">Stock élevé (> 20)</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-outline-primary w-100">
                                <i class="bi bi-search"></i> Filtrer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tableau des produits -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Liste des produits (4 produits)</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Catégorie</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Produit 1 -->
                            <tr>
                                <td>
                                    <div class="bg-light d-flex align-items-center justify-content-center rounded" style="width: 40px; height: 40px;">
                                        <i class="bi bi-laptop text-muted"></i>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">MacBook Pro</h6>
                                    <small class="text-muted">ID: 1</small>
                                </td>
                                <td>
                                    <span class="fw-bold">1999.99€</span>
                                </td>
                                <td>
                                    <span class="badge bg-warning">5</span>
                                </td>
                                <td>Informatique</td>
                                <td>
                                    <span class="badge bg-success">Actif</span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProductModal1">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <a href="/product/1" class="btn btn-outline-info" target="_blank">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Produit 2 -->
                            <tr>
                                <td>
                                    <div class="bg-light d-flex align-items-center justify-content-center rounded" style="width: 40px; height: 40px;">
                                        <i class="bi bi-phone text-muted"></i>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">iPhone 15</h6>
                                    <small class="text-muted">ID: 2</small>
                                </td>
                                <td>
                                    <span class="fw-bold">999.99€</span>
                                </td>
                                <td>
                                    <span class="badge bg-success">15</span>
                                </td>
                                <td>Électronique</td>
                                <td>
                                    <span class="badge bg-success">Actif</span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProductModal2">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <a href="/product/2" class="btn btn-outline-info" target="_blank">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Produit 3 -->
                            <tr>
                                <td>
                                    <div class="bg-light d-flex align-items-center justify-content-center rounded" style="width: 40px; height: 40px;">
                                        <i class="bi bi-headphones text-muted"></i>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">AirPods Pro</h6>
                                    <small class="text-muted">ID: 3</small>
                                </td>
                                <td>
                                    <span class="fw-bold">299.99€</span>
                                </td>
                                <td>
                                    <span class="badge bg-success">25</span>
                                </td>
                                <td>Accessoires</td>
                                <td>
                                    <span class="badge bg-success">Actif</span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProductModal3">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <a href="/product/3" class="btn btn-outline-info" target="_blank">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Produit 4 -->
                            <tr>
                                <td>
                                    <div class="bg-light d-flex align-items-center justify-content-center rounded" style="width: 40px; height: 40px;">
                                        <i class="bi bi-smartwatch text-muted"></i>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-0">Apple Watch</h6>
                                    <small class="text-muted">ID: 4</small>
                                </td>
                                <td>
                                    <span class="fw-bold">449.99€</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger">0</span>
                                </td>
                                <td>Accessoires</td>
                                <td>
                                    <span class="badge bg-danger">Rupture</span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProductModal4">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <a href="/product/4" class="btn btn-outline-info" target="_blank">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <nav class="d-flex justify-content-center mt-4">
            <ul class="pagination">
                <li class="page-item disabled">
                    <span class="page-link">Précédent</span>
                </li>
                <li class="page-item active">
                    <span class="page-link">1</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Modal Ajouter Produit -->
<div class="modal fade" id="addProductModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nom du produit *</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Prix (€) *</label>
                            <input type="number" class="form-control" id="price" step="0.01" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="stock" class="form-label">Stock *</label>
                            <input type="number" class="form-control" id="stock" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="category" class="form-label">Catégorie</label>
                            <select class="form-select" id="category">
                                <option value="">Sélectionner...</option>
                                <option value="electronique">Électronique</option>
                                <option value="informatique">Informatique</option>
                                <option value="accessoires">Accessoires</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Ajouter le produit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection