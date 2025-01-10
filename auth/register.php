<?php $title = "Register"; ?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= isset($title) ? $title : null; ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Nav -->
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
                            href="../pages/about.php" name="link-about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="../pages/contact.php" name="link-contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="../auth/login.php" name="link-login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="../auth/register.php" name="link-register">Register</a>
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
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop home page template</p>
            </div>
        </div>
    </header>
    <p>
        Now You See Page register
    </p>
    <?php require_once('../inc/footer.php'); ?>