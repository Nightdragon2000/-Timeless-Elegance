<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container px-4 px-lg-5">
        <a class="brand" href="index.php">
            <span class="brand-text">Timeless Elegance</span>
        </a>

        <!-- Animated Hamburger Menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Collections<span class="toggle-icon"></span></a>
                    <ul class="dropdown-menu dropdown-custom" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="category.php?categ=Shirts">Designer Shirts</a></li>
                        <li><a class="dropdown-item" href="category.php?categ=Blazers">Premium Blazers</a></li>
                        <li><a class="dropdown-item" href="category.php?categ=Trousers">Tailored Trousers</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="category.php?categ=Seasonal">Limited Edition</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="placeholders.php">About Us</a></li>
            </ul>
            <div class="d-flex align-items-center mobile-icons">
                <a href="#" class="icon-link"><i class="bi-cart-fill"></i></a>
                <a href="#" class="icon-link ms-4"><i class="bi bi-person-fill"></i></a>
            </div>
        </div>
    </div>
</nav>


