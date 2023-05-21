<?php

include('../includes/connect.php');
include('../functions/common_functions.php');


// $select_cart_items = "Select * from 'cart_details' where"

?>



<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="logo3.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://app.enzuzo.com/apps/enzuzo/static/js/__enzuzo-cookiebar.js?uuid=f4accd94-e6da-11ed-8b76-c317f674c707"></script>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="signup.html">

    <title>Skin care</title>
  </head>
  <body>
    <!-- <form method="post" action = "login.php"> -->
     <section class="Form" > <!--Ne bootstrap perdorim section-->
        <div class="container">
            <div class="row no-gutters"> <!--We use the row-no-gutters class to remove the gutters from a row and its columns-->
                <div class="col-lg-5">  <!--5 columns-->
                    <img src="LogInImage.jpg" class="img-fluid" alt="Log in Image" width="380px"> <!--img-fluid, klase ne bootstrap-->
                </div>
                
                <div class="col-lg-7 px-5 pt-5"> 
                            <h2>SIGN UP</h2>
                            Already have an account? <a href="login.php" class="register-here"><i>Login</i></a>
                    <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" placeholder="Username" class="form-control my-3 p-4" id="id1" name = "username" >
                                    <input type="email" placeholder="Email address" name="email" class="form-control my-3 p-4" id="id1">
                                    <input type="password" placeholder="Password" name="password" class="form-control my-3 p-4" id="id1">
                                    <input type="password" placeholder="Confirm Password" name="cpassword" class="form-control my-3 p-4" id="id1">
                                    <!-- <input type="text" placeholder="Address" class="form-control my-3 p-4" id="user_address" name = "user_address" > -->
                                    <select name="user_type" class="form-control" id = id1>
                                        <option value="User">User</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                    <br><br>
                                    <input type = "file" class = "box" accept="image/jpg, image/jpeg, imgae/png" name="user_image">
                                </div>
                            </div>
                            <input type="submit" value="Submit" class="submit-btn my-3 px-4" name="submit">
                    </form> 
                </div>
            </div>
        </div>
     </section>
     <script src="Login.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php 


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $cpassword = $_POST['cpassword'];
    $role = $_POST['user_type'];
    $image = $_FILES['user_image']['name'];
    $image_tmp_name = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();


//select query
$select_query = "Select * from user_table where username ='$username' or email = '$email'";
$result = mysqli_query($con, $select_query);
$rows_count = mysqli_num_rows($result);
if($rows_count > 0){
    echo "<script>alert('Username and email already exist') </script>";
}else if($password != $cpassword){
    echo "<script>alert('Passwords do not match') </script>";

}
else{
    //insert query
    move_uploaded_file($image_tmp_name, "./user_images/$image"); //error osht tum qit

$insert_query = "insert into user_table (username, email, password, user_ip, role, image)
values('$username', '$email', '$hash_password', '$user_ip','$role','$image')";

$sql_execute = mysqli_query($con, $insert_query);






// //selecting cart items video 42
$select_cart_items = "SELECT * FROM card_details WHERE ip_address=
'$user_ip'"; 
$result_cart = mysqli_query($con, $select_cart_items); //con
$rows_count = mysqli_num_rows($result_cart);
if($rows_count > 0){
    $_SESSION['username'] = $username;
    echo "<script>alert('You have items in your cart') </script>";
    echo "<script>window.open('checkout.php', '_self') </script>";
}else{
    echo "<script>window.open('login.php', '_self') </script>";

}

}
?>
