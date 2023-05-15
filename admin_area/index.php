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
    <link rel="stylesheet" href = "style.css">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- font awesome link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-eC0iT5Ht+GLvOx0qzk4WgFwtjUWvW8qc3GHfU4eBemdr8YtHEhAiBP/AL+DG8y2h1aT6gQcUzKoy2gimX6CtLQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .admin_image{
    width: 100px;
    object-fit:contain;

}
.product_img{
    width:100px;
    object-fit:contain;
}


        </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0 " >
        <!-- first child  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                    <img src="../fotot/aqua.jpg " class="logo">
                    <nav class="navbar navbar-expand-lg">
                        <ul class = "navbar-nav ">
                            <li class="nav-item">
                                <a href="" class="nav-link">Welcome geust</a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </nav>

        <!-- second child  -->
        <div class="bg-light">
            <h3 class="text-center p-1" >Manage Details</h3>
        </div>

        <!-- third child  --> <!-- to bring in horizontal row-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-1">
                    <a href="#"><img src ="../fotot/fyt1.png" class="admin_image"> </a>
                    <p class="text-light text-center">Admin name</p>
                </div>
                <!-- button*10>a.nav-link.text-light.bg-info.my-1    -->
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">
                        Insert products </a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                 
                </div> 
            </div>
        </div>


        <!-- fourth child -->
        <div class="container my-3">    
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
 
            if(isset($_GET['delete_products'])){
                include('delete_products.php');
            }
            ?>
        </div>

    </div> 
    <!-- <h1>Admin</h1> -->
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
</body>
</html>