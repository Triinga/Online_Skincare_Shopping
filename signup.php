<?php

include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    


}

?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="logo3.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <img src="fotot/LogInImage.jpg" class="img-fluid" alt="Log in Image" width="380px"> <!--img-fluid, klase ne bootstrap-->
                </div>
                
                <div class="col-lg-7 px-5 pt-5"> 
                            <h2>SIGN UP</h2>
                            Already have an account? <a href="login.html" class="register-here"><i>Login</i></a>
                    <form method="post" action="signup.php" novalidate>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" placeholder="Username" class="form-control my-3 p-4" id="id1" name = "name" >
                                    <input type="email" placeholder="Email address" name="email" class="form-control my-3 p-4" id="id1">
                                    <input type="password" placeholder="Password" name="password" class="form-control my-3 p-4" id="id1">
                                    <input type="password" placeholder="Confirm Password" name="cpassword" class="form-control my-3 p-4" id="id1">
                                    <select name="user_type" class="form-control" id = id1>
                                        <option value="User">User</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                    <input type = "file" class = "box" accept="image/jpg, image/jpeg, imgae/png">
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
