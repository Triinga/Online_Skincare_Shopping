<?php
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin care tips</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo3.png"/>
    <link rel="stylesheet" href="SkinCareTips.css">
    <link rel="stylesheet" href="footer.css">
    <!-- <link rel="stylesheet" href="header.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/831b733ec6.js" crossorigin="anonymous"></script>
    <script src="https://app.enzuzo.com/apps/enzuzo/static/js/__enzuzo-cookiebar.js?uuid=f4accd94-e6da-11ed-8b76-c317f674c707"></script>

</head>
<body>
  
    <div class="skincare">
    <div class="title"><h1><hr>CUSTOMIZE YOUR SKIN CARE ROUTINE<hr></h1></div>
    <br>

        
        <table class="tips" width="1500" height="400">
           <tr>
            <td width="120" rowspan="7" >
                <img src="../fotot/skin2.jpg"  width="400px">
            </td>
            <td colspan="2" id="id1">
                <h1><b>Want More Skincare Tips?</b></h1>
                <p>We're here to answer all your skincare questions, from how to use <br>hyaluronic acid
                    if you really need an eye cream in your routine.
                </p>
                <button type="submit" onclick="location.href='#emri-produktit'" class="submit-btn my-3 px-4" >Click here</button>
            </td>
           </tr>
        </table>

        <br>

        <!-- <p id="time">Wait 5 seconds for the greeting:</p> -->

        <h2 id="demo"></h2>

        
        <!-- <script>
            const myTimeout = setTimeout(myGreeting, 5000);
            
            function myGreeting() {
              document.getElementById("demo").innerHTML = "Pearl skin says Hi to you!"
            }
            </script>
                <a href="tips.html" style="color:#afb8a9; align-items: center; font: size 60px;" >MORE TIPS FROM US! </a> -->
        <br>
        <br>
         <br> 
         <hr>
            <h1>MOST LOVED</h1>
        <hr>
        <br>
        <br>
   <table class="tips2" width="1000" height="400">
    <tr>
     <td width="120" rowspan="7" > 
        <video width="250" controls>
            <source src="./video/video1.mp4">
       </video>
     </td>
     <td colspan="2" id="id1">
            <h2>SHIK EYEPATCH PRODUCT</h2> 
            <h4><i>Perfect preparation of the skin around the eyes for makeup.</i></h4>
         <p>Highly effective care product of complex action,
            created by taking into account the latest developments.
        <br>
            Fast acting to give the look of freshness and radiance.
        <br>
            Patches have a rejuvenating effect, leveling the surface of the skin, increasing its elasticity.
        <br>
            With regular use, eliminates dark circles, smoothes facial wrinkles, relieves swelling, 
             moisturizes the skin, <br>and fills it with nutrients.
        </p>
        <button type="submit" onclick="location.href='products.php'" class="btn my-3 px-4" >Buy it now</button>
        
     </td>
    </tr>
 </table>
<br>
<br>
 <table class="tips2" width="1000" height="400">
    <tr>
     <td width="120" rowspan="7" > 
        <video width="250" controls>
            <source src="video/video2.mp4">
       </video>
     </td>
     <td colspan="2" id="id1">
            <h2>REN CLEAN SKINCARE</h2>
            <h4><i>If you have sensitive skin, the Evercalm range is perfect for soothing sensitivity and calming redness.</i></h4>
         <p>
            Exfoliating <abbr>AHU</abbr> tonic, for brighter skin. Seven skin benefits, one 100% recycled plastic bottle. <br>
            This cult-status tonic exfoliates, 
            brightens, tightens and hydrates for a smooth, 
            <br>even and energised complexion that's all glow without the irritation.
        </p>
        <button type="submit" onclick="href='products.php'" class="btn my-3 px-4" >Buy it now</button>
     </td>
    </tr>
 </table>
<br>
<br>
<br>
<hr>
   <h1>WANT SKIN CARE TIPS?</h1>
<hr>
<br>
<br>

 <table border="0px" class="tabela">
    <tr>
        <td><img src="../fotot/skin6.jpg" alt="foto e produktit" class="pfoto"></td>
        <td><img src="../fotot/skin4.jpg" alt="foto e produktit" class="pfoto"></td>
        <td><img src="../fotot/skin5.jpg" alt="foto e produktit" class="pfoto"></td>
    </tr>
    <tr id="emri-produktit">
        <td><b><h3>How to apply your skin care <br> 
        products correctly</h3></b></td>
        <td><b><h3>5 tips on how to get glowing, <br>
        radiant skin</h3></b></td>
        <td><b><h3>How to hydrate your skin</h3></b></td>
    
    <tr id="pershkrimi-produktit">
        <td>Ever thought about how you're <br>
            applying your cleanser, toner, <br>
            and face cream? If the answer <br>
            is no it might be time for <br>
            a feel-godd refresh. <br> <br>
            <input type="radio" name="zgjedh">Agree
            <input type="radio" name="zgjedh">Disagree
        </td>
        <td>Glowing skin doesn't need to <br>
            feel like an impossibility. <br>
            With a few simple tips and the  <br>
            right products, you can find out <br>
           how to get glowing, radiant skin. <br> <br>
          <input type="radio" name="zgjedh">Agree
          <input type="radio" name="zgjedh">Disagree
        </td>
        <td>
            From hydrating face masks to <br>
             the best way to apply hydrating <br>
             face cream, find out how to <br>
             hydrate skin with these tips. <br><br>
             <input type="radio" name="zgjedh">Agree
             <input type="radio" name="zgjedh">Disagree
        </td>
    </tr>
</tr>
</table>

<!-- footer -->
<section id="footer">
    <div class="div">
      <div class=" div1_footer ">
        <div class="div2 div_box">
          <img id= "div_img" src="../fotot/logo2.png">
          <p>Your skincare place </p>
        </div>

          
            <address class="div2 div_box">
            <p><b>CONTACT US</b></p>
            <p> <i class="fa-sharp fa-solid fa-location-dot"></i> Qendra e Student&euml;ve, Prishtin&euml; </p>
            <p> <i class="fa-solid fa-phone"></i> +38249123456</p>
           
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
              <option value="gentrit.bytyqi@gmail.com">

              
            </datalist>
           
          </div>

          <div class="div2 div_box">
             <form id = "form_id"> 
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
    
    <p class="copyright">&copy; PearlSkin</p>


    </section>

</body>
</html>

