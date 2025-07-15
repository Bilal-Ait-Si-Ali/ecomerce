<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ma Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="bi bi-shop"></i> Ma Boutique
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="/cart">
                            <i class="bi bi-cart3"></i> Panier
                            <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">
                            <i class="bi bi-gear"></i> Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Messages Flash (statiques) -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1100;">
    <div id="cart-toast" class="toast align-items-center text-white bg-success border-0" role="alert">
        <div class="d-flex">
            <div class="toast-body" id="cart-toast-body">
                Produit ajouté au panier !
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>


    <!-- Contenu principal -->
    <main class="container my-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Ma Boutique</h5>
                    <p class="mb-0">Votre boutique en ligne de confiance</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">&copy; 2025 Ma Boutique. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
async function updateCartCount() {
    try {
        const response = await fetch('/cart/count'); // Make sure this route exists in Laravel
        const data = await response.json();

        if (response.ok && data.cart_count !== undefined) {
            const cartCountSpan = document.getElementById('cart-count');
            cartCountSpan.textContent = data.cart_count;

            // Optional: hide badge if count is 0
            if (data.cart_count == 0) {
                cartCountSpan.style.display = 'none';
            } else {
                cartCountSpan.style.display = 'inline-block';
            }
        } else {
            console.warn('Unexpected response from server:', data);
        }
    } catch (error) {
        console.error('Failed to fetch cart count:', error);
    }
}
document.addEventListener('DOMContentLoaded', function() {
            updateCartCount(); // Initial count fetch
        });
</script>

    @yield('scripts')
</body>
</html>