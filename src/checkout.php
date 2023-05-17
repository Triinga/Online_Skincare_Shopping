<!-- connect file -->
<?php
include('../includes/connect.php'); //dont use dots cause folders are in the same level
// include('../functions/common_functions.php');
session_start();
?>


<html>
<head>
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"  >
    <link rel="stylesheet" href = "style.css">
</head>

    <body>
<nav class ="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
<li class="nav-item">
    <a class="nav-link" href="#">Welcome Guest</a>
</li>
<!-- <li class="nav-item">
    <a class="nav-link" href="#">Login</a>
</li> -->

        <!-- Search bar -->
        <!-- <form class="d-flex" action="search_product.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" 
            aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn  btn-outline-light"
        name="search_data_product">
        </form>
-->
    
<!-- </ul> -->


<!-- second child -->

<!-- <nav class ="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
<li class="nav-item">
    <a class="nav-link" href="#">Welcome Guest</a>
</li> -->

<?php
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


<!-- <nav class ="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
    <?php
        // if(!isset($_SESSION['username'])){
        //     echo "   <li class='nav-item'>
        //     <a class='nav-link' href='#'>Welcome Guest</a>
        //     </li>"; 
        // }else{
        //     echo "<li class='nav-item'>
        //     <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
        //     </li>";
        // }

        
        // if(!isset($_SESSION['username'])){
        //     echo "<li class='nav-item'>
        //     <a class='nav-link' href='login.php'>Login</a>
        //     </li>";
        // }else{
        //     echo "<li class='nav-item'>
        //     <a class='nav-link' href='logout.php'>Logout</a>
        //     </li>";
        // }

    ?> -->


<!-- third child -->
<!-- <div class="bg-light"></div>
 <h3 class="text-center">Hidden Store</h3>
 <p class="text-center">Communciation is at the heart of the e-commerce and community</p> -->
 
 
 <!--fourth child -->
 <div class="row px-3"> <!-- whenever we are creating this one we can give multiple columns inside this -->
    <div class="col-md-12">
        <!-- products -->
        <div class="row">
            <!-- fetching products -->
            <?php 
            if(!isset($_SESSION['username'])){
                include('login.php');
            }else{
                include('payment.php');
            }
           ?>

        </div>
    </div>
 </div>
   
</body>
</html>