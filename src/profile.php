<!-- connect file -->
<?php
include('../includes/connect.php');    //dont use dots cause folders are in the same level
// include('../functions/common_functions.php');
session_start();
?>

<?php
include('header1.php');
?>

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

<title>Welcome <?php  echo $_SESSION['username'] ?></title>
<link  href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384=1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"  >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href = "profile.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="shortcut icon" type="image/x-icon" href="logo3.png"/>
    <style>
body{
    overflow-x: hidden;
}
    </style>
      
</head> 
    <body>



<!-- third child -->
<div class="bg-light"></div>
 <h3 class="text-center mt-5">Pearl Skin</h3>
 <p class="text-center">“The best foundation you can wear is glowing healthy skin.”</p>
</div>

 <!-- fourth child -->
 <div class = "row">
    <div class = "col-md-2 ">
<ul class = "navbar-nav bg-secondary text-center" style="height:100vh">
        <li class="nav-item bg-info" > 
            <a class = "nav-link text-light" href = "#"><h4>Your profile</h4></a>
        </li>

<?php
$username = $_SESSION['username'];
$user_image = "Select * from user_table where username = '$username'";
$user_image = mysqli_query($con, $user_image);
$row_image = mysqli_fetch_array($user_image);
$user_image = $row_image['image'];
echo "<li class='nav-item'> 
<img src='./user_images/$user_image' alt='' class='profile_img my-4'>
</li>";
?>
    
        <li class="nav-item "> 
            <a class = "nav-link text-light" href = "profile.php">Pending orders</a>
        </li>
        <li class="nav-item"> 
            <a class = "nav-link text-light" href = "profile.php?edit_account">Edit Account</a>
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
    <?php 
        get_user_order_details(); 
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
    </div>
 </div>

 
<!-- footer -->
<section id="footer">
  <div class="div">
    <div class="div1_footer">
      <div class="div2 div_box">
        <img id="div_img" src="../fotot/logo2.png">
        <p>Your skincare place</p>
      </div>

      <address class="div2 div_box">
        <p><b>CONTACT US</b></p>
        <p><i class="fa-sharp fa-solid fa-location-dot"></i> Qendra e Student&euml;ve, Prishtin&euml; </p>
        <p><i class="fa-solid fa-phone"></i> +38249123456</p>

        <i class="fa-solid fa-envelope"></i>
        <a href="mailto:pearlSkin@gmail.com">pearlSkin@gmail.com</a>
      </address>


      <div class="div2 div_box">
        <p><b>About US</b></p>
        <p>P&euml;r tu lidhur direkt me ne</p>
        <input list="emailat" name="email" id="email" class="email1">
        <datalist id="emailat">
          <option value="tringa.baftiu@gmail.com">
          <option value="rinesa.zuzaku@gmail.com">
          <option value="rinesa.bislimi@gmail.com">
          <option value="vijola.neziraj@gmail.com">
          <option value="gentrit.@gmail.com">
        </datalist>
      </div>

      <div class="div2 div_box">
        <form id="form_id">
          <fieldset id="fieldset_id">
            <legend>Subscribe Newsletter</legend>
            <input type="email" class="email" placeholder="your email">
            <button type="button" class="button">Subscribe</button>
          </fieldset>
        </form>
      </div>
    </div>
    <div>

    </div>
    <p class="copyright">&copy; PearlSkin |
      <span id="datetime"></span> <!-- Display the date and time here -->
    </p>
  </div>
</section>

<?php
// Set the content type to JSON
//header('Content-Type: application/json');

// Get the current date and time
$dateTime = date('Y-m-d H:i:s');

// Create the response data
$response = array(
    'date' => date('Y-m-d'),
    'time' => date('H:i:s'),
    'datetime' => $dateTime
);

// Send the response as JSON
echo json_encode($response);
?>

<!-- JavaScript to fetch and display the date and time -->
<script>
  // Fetch the date and time from the API
  fetch('../date-time.php')
    .then(response => response.json())
    .then(data => {
      // Get the span element for the date and time
      const datetimeSpan = document.getElementById('datetime');

      // Update the content of the span with the fetched date and time
      datetimeSpan.textContent = data.datetime;
    })
    .catch(error => console.error(error));
</script>
        

</body>
</html>
