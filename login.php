<?php
$title = "Login";
require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop home page template</p>
        </div>
    </div>
</header>
<form action="login.php" class="form border my-2 p-3" method="post">
    <div class="mb-3">
        <div class="mb-3">
            <label for="">Type Email Address</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Type Password</label>
            <input type="password" name="password" id="password" class="form-control" rows="7"></input>
            <div class="mb-3">
                <button type="submit" value="login" id="" class="btn btn-success">Login</button>
            </div>
        </div>
</form>
<?php require_once('footer.php'); ?>