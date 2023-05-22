<?php
    include('../includes/connect.php'); 
    include('../functions/common_functions.php');

    card(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pearl Skin</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="path/to/your/custom-css-file.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Brand/logo -->
        <!-- <a class="navbar-brand" href="#"><img src="../fotot/logo2.png" id="logo" alt="Logo" style="width:100px"></a> -->
        <a class="navbar-brand" href="#">Pearl Skin</a>

        <!-- Welcome message and login/logout link -->
        <?php
            // if (!isset($_SESSION['username'])) {
            //     echo "<span class='welcome-msg'>Welcome Guest</span>";
            // } else {
            //     echo "<span class='welcome-msg'>Welcome " . $_SESSION['username'] . "</span>";
            // }

            // if (!isset($_SESSION['username'])) {
            //     echo "<a class='icon-link' href='Login.php' target='_blank'><i class='fa-solid fa-user'></i></a>";
            // } else {
            //     echo "<a class='login-link' href='logout.php'>Logout</a>";
            // }
            // ?>

        <!-- Responsive menu toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="products.php" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Products
    </a>
    <ul class="dropdown-menu"  aria-labelledby="productsDropdown">
    <li><a class="dropdown-item" href="products.php">Products</a></li>
<li>     <?php
            getCategories();
        ?>
        </li>
    </ul>
</li>

                <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SkinCareTips.php">Skin Care Tips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">My Profile</a>
                </li>
            </ul>

            <!-- Shopping cart icon with item count -->
            <a class="icon-link" href="card.php">
                <i class="fas fa-shopping-cart"></i>
                <sup>
                    <?php
                        card_item();
                    ?>
                </sup>
            </a>

            <!-- Search form -->
            <form class="d-flex" action="search_product.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- Your custom styles -->
<style>
    /* Add your custom styles here */
    .welcome-msg {
        margin-right: 10px;
    }

    .navbar-nav {
        display: flex;
        align-items: center;
    }

    .nav-item {
        margin-right: 10px;
    }

    .icon-link {
        margin-left: 10px;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.1);
        padding: 5px 10px;
        border-radius: 50%;
    }
</style>

<!-- Bootstrap JS link -->
<script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>