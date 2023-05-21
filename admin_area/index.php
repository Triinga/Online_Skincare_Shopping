<!-- connect file -->
<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
        }
        
        .product_img {
            width: 100px;
            object-fit: contain;
        }

        /* Custom styles */
        body {
            background-color: #FDEEF4;
        }

        .navbar {
            background-color: #FCE1E9;
            padding: 10px;
        }

        .navbar .logo {
            width: 50px;
            height: 50px;
            object-fit: contain;
            margin-right: 10px;
        }

        .navbar .nav-link {
            color: #FFFFFF;
        }

        .dashboard-title {
            background-color: #F7C6D6;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .admin-profile {
            background-color: #FFF2F7;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .admin-profile img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .admin-profile p {
            color: #FFFFFF;
            text-align: center;
        }

        .admin-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .admin-actions a {
            margin: 5px;
            padding: 10px;
            background-color: #FCAACD;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
        }

        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="navbar">
        <div class="container-fluid">
            <img src="../fotot/aqua.jpg" class="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome guest</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- dashboard title -->
    <div class="dashboard-title">
        <h3>Manage Details</h3>
    </div>

    <!-- admin profile -->
    <div class="admin-profile">
        <a href="#"><img src="../fotot/fyt1.png" class="admin_image"></a>
        <p class="text-light">Admin name</p>
    </div>

    <!-- admin actions -->
    <div class="admin-actions">
        <a href="insert_product.php">Insert products</a>
        <a href="index.php?view_products">View products</a>
        <a href="index.php?insert_category">Insert categories</a>
        <a href="index.php?view_categories">View categories</a>
        <a href="index.php?insert_brand">Insert Brands</a>
        <a href="index.php?view_brands">View Brands</a>
        <a href="index.php?list_orders">All Orders</a>
        <a href="index.php?list_payment">All payments</a>
        <a href="index.php?list_users">List users</a>
        <a href="index.php?logout">Logout</a>
    </div>

    <!-- content section -->
    <div class="container">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }

        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }

        if(isset($_GET['view_products'])){
            include('view_products.php');
        }

        if(isset($_GET['edit_products'])){
            include('edit_products.php');
        }

        if(isset($_GET['delete_product'])){
            include('delete_product.php');
        }

        if(isset($_GET['view_categories'])){
            include('view_categories.php');
        }

        if(isset($_GET['view_brands'])){
            include('view_brands.php');
        }
        if(isset($_GET['delete_category'])){
            include('delete_category.php');
        }
        if(isset($_GET['delete_brands'])){
            include('delete_brands.php');
        }
        if(isset($_GET['list_orders'])){
            include('list_orders.php');
        }
        if(isset($_GET['list_payment'])){
            include('list_payment.php');
        }
        if(isset($_GET['list_users'])){
            include('list_users.php');
        }
        if(isset($_GET['logout'])){
            include('logout.php');
        }
        if(isset($_GET['delete_user'])){
            include('delete_user.php');
        }
        ?>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

