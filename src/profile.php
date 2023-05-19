<!-- connect file -->
<?php
include('../includes/connect.php');    //dont use dots cause folders are in the same level
include('../functions/common_functions.php');
session_start();
?>


<html>
<head>
<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="header.html">
<title>Welcome <?php  echo $_SESSION['username'] ?></title>
<link  href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384=1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"  >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href = "profile.css">
    <style>
body{
    overflow-x: hidden;
}


    </style>
</head> 
    <body>

<!-- calling cart functions
<?php
card();
?> 
-->


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


<!-- third child -->
<div class="bg-light"></div>
 <h3 class="text-center">Hidden Store</h3>
 <p class="text-center">Communciation is at the heart of the e-commerce and community</p>
</div>

 <!-- fourth child -->
 <div class = "row">
    <div class = "col-md-2 ">
<ul class = "navbar-nav bg-secondary text-center" style="height:100vh">
        <li class="nav-item bg-info" > 
            <a class = "nav-link text-light" href = "#"><h4>Your profile</h4></a>
        </li>
        <!-- <li class ="nav-item bg-info">
            <img src="../fotot/skin1.jpg">
        </li> -->

<?php
$username = $_SESSION['username'];
$user_image = "Select * from `user_table` where username = '$username'";
$user_image = mysqli_query($con, $user_image);
$row_image = mysqli_fetch_array($user_image);
$user_image = $row_image['image'];
echo "<li class='nav-item'> 
<img src='../src/uploaded_img/$user_image' alt='' class='profile_img my-4'>
</li>";
?>
    
        <li class="nav-item "> 
            <a class = "nav-link text-light" href = "profile.php">Pending orders</a>
        </li>
        <li class="nav-item"> 
            <a class = "nav-link text-light" href = "profile.php?edit_account">Edit Account</a>
        </li>
        <li class="nav-item"> 
            <a class = "nav-link text-light" href = "profile.php?change-password">Change password</a>
        </li>

        <li class="nav-item "> 
            <a class = "nav-link text-light" href = "profile.php?my_orders">My orders</a>
        </li>
        <li class="nav-item"> 
            <a class = "nav-link text-light" href = "profile.php?delete_account">Delete Account</a>
        </li>
        <li class="nav-item"> 
            <a class = "nav-link text-light" href = "login.php">Logout</a>
        </li>
</ul>
    </div>
    <div class="col-md-10">
        <?php get_user_order_details(); 
     ?>
    </div>
 </div>
 <?php
 if(isset($_GET['edit_account'])){
            include('edit_account.php');
        }
        if(isset($_GET['my_orders'])){
            include('user_orders.php');
        }
        if(isset($_GET['delete_account'])){
            include('delete_account.php');
        }
        ?>
        

</body>
</html>