<?php
session_start();
?>
<?php
include('header1.php');
?>
<!-- connect file -->
<?php
include('../includes/connect.php');
// include('../functions/common_functions.php');

// // Fetch products based on selected filters
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_type'])) {
//     $productType = $_POST['product_type'];
//     $filteredProducts = getProductsByType($productType); // Modify this function to fetch products based on the selected type
//     renderProducts($filteredProducts); // Modify this function to render the filtered products
//     exit(); // End the script execution after sending the response
// }
// ?>



<nav class ="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
    <?php
        if(!isset($_SESSION['username'])){
            echo "   <li class='nav-item'>
            <a class='nav-link' href='#'>Welcome Guest</a>
            </li>"; 
        }else{
            echo "<li class='nav-item'>
            <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
            </li>";
        }

        
        if(!isset($_SESSION['username'])){
            echo "<li class='nav-item'>
            <a class='nav-link' href='login.php'>Login</a>
            </li>";
        }else{
            echo "<li class='nav-item'>
            <a class='nav-link' href='logout.php'>Logout</a>
            </li>";
        }
?>
</ul>
</nav>

<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="preferencat.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

    <body>
        


<!-- calling card function -->

<!-- third child -->
<div class="bg-light"></div>
 <h3 class="text-center">Hidden Store</h3>
 <p class="text-center">Communciation is at the heart of the e-commerce and community</p>
 
 
 <!--fourth child -->
 <div class="row px-3"> <!-- whenever we are creating this one we can give multiple columns inside this -->
    <div class="col-md-10">
        <!-- products -->
        <div class="row">
            <!-- fetching products -->
                <?php
                // calling function
                getProducts();
                getUniqueCategories();
                getUniqueBrands();      
                ?>
        <!-- row end -->
        </div>
        <!-- col end -->
        </div>
        <div class="col-md-2 bg-secondary p-0">
            <!-- brands to be displayed -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item ">
                    <a href="#" class="nav-link text-light text-center"><h4>Delivery Brands </h4> </a>
                </li>        
              <?php
                getBrands();
              ?>
             
            </ul>

           
             <ul class="navbar-nav me-auto">
                <li class="nav-item ">
                    <a href="#" class="nav-link text-light text-center"><h4>Category </h4> </a>
                </li>
              <?php
                    getCategories();
                    
              ?>
            </ul>
        </div>
    <!-- sidenav -->
    </div>
 </div>
<!-- these two wwill come in horizontal row, for the first im going to give first 10  space, for the second 2 space it should always sum up to 12-->
     
 </div>


 <?php
// përfshini klasën UserPreferences dhe lidhuni me db
include_once 'UserPreferences.php';
$servername = "127.0.0.1:3310";
$username = "root@localhost";
$password = "";
$dbname = "mystore";
$userId = 1; // vendosni id e përdoruesit aktual

// krijoni një instancë të klasës UserPreferences duke i kaluar id e përdoruesit dhe emrin e cookie-t
$userPref = new UserPreferences($userId, "user_product_pref", $servername, $username, $password, $dbname);

// kontrollo nese është bërë post me të dhënat e preferencave
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productType = $_POST['product_type'];
    // ruaj preferencën e përdoruesit në db
    $userPref->savePreference($productType);
}

// merr preferencën e përdoruesit
$productPref = $userPref->getPreference();
?>
      <div class="container">
        <h1>Zgjidhni preferencat e produktit</h1>
        <div class="preferences-container">
            <form method="post">
                <label for="product_type">Brands</label>
                <select name="product_type" id="product_type">
                    <option value="none" <?php if ($productPref === 'none') echo 'selected' ?>>Asnjë</option>
                    <option value="face" <?php if ($productPref === 'face') echo 'selected' ?>>Klairs</option>
                    <option value="body" <?php if ($productPref === 'body') echo 'selected' ?>>CosRX</option>
                    <option value="hair" <?php if ($productPref === 'hair') echo 'selected' ?>>Neogen</option>
                    <option value="hair" <?php if ($productPref === 'hair') echo 'selected' ?>>Dr.Jart+</option>
                </select>
                <button class="save-button" type="submit">Ruaj Preferencën</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Submit the form via AJAX when the button is clicked
        $('#filterForm').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get the selected product type
            var productType = $('#product_type').val();

            // Send the AJAX request
            $.ajax({
                url: 'products.php', // Replace with the path to your PHP file
                type: 'POST',
                data: { product_type: productType }, // Send the selected product type as data

                success: function(response) {
                    // Update the product list with the filtered products
                    $('#products').html(response);
                },
                error: function(xhr, status, error) {
                    // Handle the error, if any
                    console.log(error);
                }
            });
        });
    });
    </script>
  
</body>
</html>