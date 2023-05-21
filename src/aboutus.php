<?php
include('../includes/connect.php'); //dont use dots cause folders are in the same level
// include('../functions/common_functions.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us | Pearl Skin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" href="about-us.css">
	<!-- <link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="header.html"> -->

    <link rel="stylesheet" href="footer.cs">
	<link rel="stylesheet" href="home_style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="footer.css">
	<script src="https://kit.fontawesome.com/831b733ec6.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	
	<link rel="shortcut icon" type="image/x-icon" href="logo3.png"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://app.enzuzo.com/apps/enzuzo/static/js/__enzuzo-cookiebar.js?uuid=f4accd94-e6da-11ed-8b76-c317f674c707"></script>
	
	<style>
		body {
		  background-image: url('../fotot/background-image.jpg');
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-size: 100% 100%;
		}
		#multipleimg {
  background-image: url(fotot/bg3.png), url(fotot/bg4.jpg);
  background-position: bottom right, bottom left;
  background-repeat: repeat, repeat;
  padding: 20px;
  width: 1px, 50px;
}
      /* Hide the extra paragraphs by default */
      .extra-paragraphs {
        display: none;
        margin-top: 50px;
      }


		</style>
	
</head>	
<body>
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

	


	
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1 onclick="this.innerHTML ='Pearl Skin'" onmouseover="style.color='white'">About us</h1>
					<br>
				</div>
				<div class="content">
					<h3>Pearl Skin International Limited, trading as <i style="color:#a52a2a" onmouseover="style.color='white'">The Pearl Skin</i>, is a British cosmetics, skin care and perfume company.</h3>
					<p class="text"><i>Pearl Skin</i> carries a wide range of products for the body, face, hair and home.The shop claims its products are 
            "inspired by nature" and feature ingredients such as marula oil and sesame seed oil sourced through the Community Trade
             program.<span class="moreText"><br><br>Launched in 1987, The Parl Skin’s Community Trade programme based on the practice of trading with communities in need
				and giving them a fair price for natural ingredients or handcrafts, including brazil nut oil, sesame seed oil, honey,
				and shea butter. <br><br>The first Community Trade product was a wooden footsie roller which was supplied by a small community
				in Southern India, Teddy Exports, which is still a key Community Trade supplier.
			   The company currently has a range of 1,000 products sold in about 3,000 stores,
			   divided between those owned by the company and franchised outlets in more than 65 countries.
			   <br><br>Pearl Skin has campaigned to end animal testing in cosmetics alongside animal cruelty NGO Cruelty-Free International 
			   since 1989. The company's products are non-animal tested and are certified cruelty-free by Cruelty Free International’s 
			   Leaping Bunny.</span></p>
			   <a class="read_more"  onclick="toggleParagraphs()">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						<script src="about-us.js"></script>
					
				</div>

                <div class="extra-paragraphs">

                  <p>We believe that beautiful skin starts with healthy skin. That's why we've
                     dedicated ourselves to creating the best skincare products using only the finest ingredients.</p>

                  <p>  We believe in the power of nature to nourish and rejuvenate the skin, so we use natural, organic 
                    ingredients in all of our products. Our formulations are carefully crafted to provide maximum benefit to the skin without harsh
                     chemicals or synthetic fragrances.</p>
                    
                  <p>  But we don't just care about making great products - we care about making a difference. 
                    That's why we're committed to sustainable, eco-friendly practices in every aspect of our business. 
                    From sourcing ingredients to packaging and 
                    shipping, we strive to minimize our impact on the planet while still delivering the best skincare products
                     possible.</p>
                  </div>
                <script>
                    function toggleParagraphs() {
                      var extraParagraphs = document.querySelector('.extra-paragraphs');
                      if (extraParagraphs.style.display === 'none') {
                        extraParagraphs.style.display = 'block';
                      } else {
                        extraParagraphs.style.display = 'none';
                      }
                      // Scroll to the extra paragraphs
                      extraParagraphs.scrollIntoView({behavior: "smooth"});
                    }
                  </script>
				<div class="social">
					<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
					<audio id="audio1" src="mp3/1.mp3" controls style="display: none;"></audio>
					<i class="fab fa-spotify" onclick="playAudio();"></i>
				</div>
			</div>
			<div class="image-section">
				<img src="../fotot/aboutUs.jpg" style="width:250px,height-300px">
			</div>
		</div>
	</div>


	

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
				  <option value="suhejla.hoxha@gmail.com">
				  <option value="ylljete.kicaj@gmail.com">
				  
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


       <br>
		
       

</body>
</html>
