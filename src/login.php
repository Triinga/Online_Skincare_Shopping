<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
@session_start();
?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="862629191035-grcft2572iiup79mgi9vj1vkeeiacfnt.apps.googleusercontent.com">
    <link rel="shortcut icon" type="image/x-icon" href="logo3.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="signup.php">
    <link rel="stylesheet" href="home.html">
    <script src="https://app.enzuzo.com/apps/enzuzo/static/js/__enzuzo-cookiebar.js?uuid=f4accd94-e6da-11ed-8b76-c317f674c707"></script>
    <script src="https://apis.google.com/js/platform.js" async defer> </script>
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
                    <h1 class="h1"><b>Join us</b></h1>
                    <h4>Sign into your account</h4>
                    <form class="login_form" method="post" action = "" >
                        <div class="form-row">
                            <div class="col-lg-7"> <!--7 columns-->
                                <input type="text" autocomplete="off" placeholder="Username" name="username" class="form-control my-3 p-4"
                                 id="form" required> 
                                <!--Kur deshirojme te krijojme nje form ne bootstrap duhet te perdorim clasen form-control-->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                
                                <input type="password" placeholder="Password" name="password" class="form-control my-3 p-4" id="form">
                                <button type="button" class="btn2 mt-2 mb-5" onclick="window.location.href='change_password.php'">Change Password</button>
                            </div>
                        </div>
                        

                        <div class="form-row">
                            <div class="col-lg-7">
                               <button type="submit" class="btn1 mt-3 mb-5" name = "submit" name="user_login">Login</button>
                            </div>
                        </div>
                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
                        
                        <div ><p>Don't have an account? <a href="signup.php" class="register-here"><i>Register here</i></a></p></div>
                    </form> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <script>
        function onSignIn(googleUser){
            console.log('User is'+JSON.stringify(googleUser.getBasicProfile()));
        }
     </script>
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
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select_query = "SELECT * FROM user_table WHERE username = '$username'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    $user_ip = getIPAddress();

    // Cart item 44video
    $select_query_cart = "SELECT * FROM card_details WHERE ip_address = '$user_ip'";
    $select_cart = mysqli_query($con, $select_query_cart);
    $row_count_cart = mysqli_num_rows($select_cart);

    if ($row_count > 0) {
        $_SESSION['username'] = $username;
        if (password_verify($password, $row_data['password'])) {
            $_SESSION['username'] = $username;
            echo "<script>alert('Login successful!')</script>";
            
            if ($row_data['role'] == 'Admin') {
                echo "<script>window.open('../admin_area/index.php', '_self')</script>";
            } else if($row_data['role'] == 'User'){
                echo "<script>window.open('profile.php', '_self')</script>";
            }
        } else {
            echo "<script>alert('Invalid credentials')</script>";
        }
    } else {
        echo "<script>alert('Invalid credentials')</script>";
    }
}
?>
   