<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id"content="862629191035-teis8p0vakrevpbieii23mq4nqs0rbvr.apps.googleusercontent.com">
    <link rel="shortcut icon" type="image/x-icon" href="logo3.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <script src="https://app.enzuzo.com/apps/enzuzo/static/js/__enzuzo-cookiebar.js?uuid=f4accd94-e6da-11ed-8b76-c317f674c707"></script>
    <script src="https://apis.google.com/js/platform.js"async defer></script>
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
                    <h1 class="h1"><b>Join us</b></h1>
                    <h4>Sign into your account</h4>
                    <form class="login_form" method="post" action = "login.php" name="form" onsubmit="return validated()">
                        <div class="form-row">
                            <div class="col-lg-7"> <!--7 columns-->
                                <input autocomplete="off" type="email" placeholder="Email" name="email" class="form-control my-3 p-4"
                                 id="form" required> 
                                <!--Kur deshirojme te krijojme nje form ne bootstrap duhet te perdorim clasen form-control-->
                                <!-- <div id="email_error">Please fill up your email</div> -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Password" name="password" class="form-control my-3 p-4" id="form">
                                <!-- <div id="pass_error">Please fill up your password</div> -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                               <button type="submit" class="btn1 mt-3 mb-5">Login</button>
                               <div class="g-signin2" data-onsuccess="onSignIn">
                               </div>
                               <div id="content"></div>
                            </div>
                        </div>
                        <label class="remember-me"><input type="checkbox">Remember me</label>
                        <a href="#forgot-pw" class="forgot-pw"><i>Forgot password?</i></a>
                        <div ><p>Don't have an account? <a href="signup.html" class="register-here"><i>Register here</i></a></p></div>
                    </form> 

                    <div id="forgot-pw">
                        <form  class="form" method="post" action = "login.php">
                            <a href="#" class="close">&times;</a>
                            <h2>Forgot your password</h2>
                            <p> Please enter the email address you'd like your <br>password 
                                reset information sent to.
                            </p>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="email" placeholder="Enter email address" name="email" class="form-control my-3 p-4"
                                     id="email" >
                                </div>
                            </div>
                            <input type="submit" value="submit" class="submit-btn my-3 px-4">
                        </form>
                    </div>

                    <!-- <div id="register-here">
                        <form method="post" action = "login.php" class="form">
                            <a href="#" class="close">&times;</a>
                            <h2>SIGN UP</h2>
                            <p id="pa">It's free and it only takes a minute</p>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" placeholder="Username" class="form-control my-3 p-4" id="id1" >
                                    <input type="text" placeholder="Role" class="form-control my-3 p-4" id="id1" >

                                    <input type="email" placeholder="Email address" name="email" class="form-control my-3 p-4" id="id1">

                                    <input type="password" placeholder="Password" name="password" class="form-control my-3 p-4" id="id1">
                                    <input type="password" placeholder="Confirm Password" name="password" class="form-control my-3 p-4" id="id1">
                                </div>
                            </div>
                            <input type="submit" value="Submit" class="submit-btn my-3 px-4">
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
     </section>
    <!-- </form>      -->
    <script>    
    function onSignIn(googleUser){
        var profile = googleUser.getBasicProfile();
        console.log('User is ' +JSON.stringify(profile));
        var element= document.querySelector('#content');
        element.innerText= profile.getName();
        var image = document.create_Element('img')
        image.setAttribute('src',googleUser.getImageUrl());
        element.apped(image);

        function signOut(){
            gapi.auth2.getAuthInstance().signOut().then(function(){
              console.log('user sign out')  
            })
        }
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
