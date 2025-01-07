<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php">EraaSoft PMS</a>
        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link active"
                        aria-current="page"
                        href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="pages/about.php" name="link-about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="pages/contact.php" name="link-contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="auth/login.php" name="link-login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="auth/register.php" name="link-register">Register</a>
                </li>
            </ul>
            <form class="d-flex" action="cart.php" method="post">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill" name="total-products-in-cart">0</span>
                </button>
            </form>
        </div>
    </div>
</nav>