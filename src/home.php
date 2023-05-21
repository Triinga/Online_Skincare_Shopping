<!DOCTYPE html>
<html>
  <head>
  
   <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title> Pearl skin </title>
        <link rel="stylesheet" href="home_style.css">
        <link rel="shortcut icon" type="image/x-icon" href="logo3.png"/>
        <script src="https://app.enzuzo.com/apps/enzuzo/static/js/__enzuzo-cookiebar.js?uuid=f4accd94-e6da-11ed-8b76-c317f674c707"></script>
        <script src="https://kit.fontawesome.com/831b733ec6.js" crossorigin="anonymous"></script>
    <section class = "all1"> 
        <!-- jquery cdn-->
        <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>

        <style>
          .slideshow{
              width:100%;
              height: 100vh;
              background-size: 100%;
            }
        </style>
    
  </head>
  <body>
    <header>
      <a class="logo" href="#"><img src="../fotot/logo2.png" id="logo" alt="Logo" style="width:100px"></a>
      <div class="items">
          <input type="search" class="search" placeholder=" &ccedil;fare po kerkoni?">
          <button type="submit" class="fas fa-search"></button>
          <div class="login">
              <a href="Login.html" target="_blank"><i class="fa-solid fa-user"></i></a>
          </div>
      </div>
  </header>
  
  <header class="hdr">
      <nav>
          <ul class="nav_linqet">
              <li><a href="home.php">Home</a></li>
              <li class="submenu">
                  <a href="products.php">Products</a>
                  <ul class="submenu-items">
                    
                      <?php
                      include('../includes/connect.php'); //dont use dots cause folders are in the same level
                      include('../functions/common_functions.php');
                      getCategories();
                    ?>
                   
                  </ul>
              </li>
              <li><a href="about-us.html">About us</a></li>
              <li><a href="Login.html">Log in</a></li>
              <li><a href="contact-us.html">Contact us</a></li>
              <li><a href="faq.php">FAQ</a></li>
          </ul>
      </nav>
  </header>
  
  <style>
      .submenu-items {
          display: none;
          position: absolute;
          background-color: #fff;
          padding: 10px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          z-index: 1;
      }
  
      .submenu:hover .submenu-items {
          display: block;
      }
  </style>
  
  
  <style>
      .submenu-items {
          display: none;
      }
  
      .submenu:hover .submenu-items {
          display: block;
      }
  </style>
  
  
        
    <div class = "all">      
        <div class="gallery">
          <img class="slideshow" src="../fotot/slides4.jpg" alt="imazhi1"> 
        <div class = " slideshowcontent">
          <a href = "Login.php" > 
          <button type="button" class = "button1"> Blej tani</button> </a>
        </div>   
        </div>

      <!-- kodi me jQuery per slideshow -->
        <script>
          let slideshow_array = [
              '../fotot/slides4.jpg',
              '../fotot/slides7.jpg',
             '../fotot/slides8.jpg'
          ]; 
          let pic = $(".slideshow");
          let i = 0;
          setInterval(function() {
              i = (i + 1) % slideshow_array.length 
          $(document).ready(function(){
              pic.fadeOut(1000, () => {
                  pic.attr('src', slideshow_array[i]);
              pic.fadeIn(1000);     
              });
          });
          }, 3000)
        </script>


      <!-- tabs- te rejat; ne zbritje -->
      <div class="tabs">
    <span data-tab-name="#tab1">Të rejat</span>
    <span data-tab-name="#tab2">Në zbritje</span>
</div>

<div class="tab-content">
    <div class="tabs_tab active" id="tab1" data-tab-content>
        <div> 
            <table border="0px" class="tabela">
                <tr id="fotot">
                    <?php
                    // Fetch products from the database
                    $select_query = "SELECT * FROM `products` LIMIT 3"; // Assuming you want to display 3 products
                    $result_query = mysqli_query($con, $select_query);

                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $product_image1 = $row['product_image1'];
                        $product_title = $row['product_title'];
                        $product_price = $row['product_price'];

                        echo "<td>
                                <button class='button2'>New</button>
                                <img src='../admin_area/product_images/$product_image1' alt='$product_title' class='pfoto'>
                                <div><b>$product_title</b></div>
                                <div>$product_price</div>
                            </td>";
                    }
                    ?>
                </tr>
                <!-- Rest of the table rows -->
            </table>
        </div>
    </div>

    <div class="tabs_tab" id="tab2" data-tab-content>
        <div>
            <div>
                <table border="0px" class="tabela" style="width: 1051.09px">
                    <tr>
                        <?php
                        // Fetch more products from the database
                        $select_query = "SELECT * FROM `products` LIMIT 3,3"; // Assuming you want to display the next 3 products
                        $result_query = mysqli_query($con, $select_query);

                        while ($row = mysqli_fetch_assoc($result_query)) {
                            $product_image1 = $row['product_image1'];
                            $product_title = $row['product_title'];
                            $product_price = $row['product_price'];

                            echo "<td>
                                    <button class='button3'>-30%</button>
                                    <img src='../admin_area/product_images/$product_image1' alt='$product_title' class='pfoto'>
                                    <div><b>$product_title</b></div>
                                    <div>$product_price</div>
                                </td>";
                        }
                        ?>
                    </tr>
                    <!-- Rest of the table rows -->
                </table>
            </div>
        </div>
    </div>
</div>


    

      <br>
      <!--lidhja me keshillat-->
      <section class="new2">
        <h2  style="text-align: center;">K&euml;shillat</h2>
      <div class="div_keshillat">
          <div class="keshillat2">
              <br>
              <h3 style="text-align: center;">Nuk jeni i sigurt&euml; p&euml;r produktin q&euml; duhet t&euml; bleni? </h3>
              <br>
            <ul>
               <p style="text-align: center;">At&euml;here ne ju vijm&euml; n&euml;  ndihm&euml;  p&euml;r &ccedil;far&euml;do k&euml;rkese </p>
            </ul>
  
            <li> Don't have time for intensive skin care? You can still pamper yourself by acing the basics. 
            Good skin care and healthy lifestyle choices can help delay natural aging and prevent various skin problems. 
            Get started with these five no-nonsense tips.</li>
            <ul>
            <li >Cleanse Once and Then Cleanse Again</li>
            <li>Always Layer Products in the Right Order</li>
            <li id="id1"> Know Your Skin Concern </li>
            <li>Take the Time to Exfoliate </li>
            <li> Always Wear Sunscreen </li>
            </ul> 
      
        <script>
          let str = document.getElementById("id1").innerHTML; 
          document.getElementById("id1").innerHTML = str.replace("Concern","Type" );
        </script>
   
        </ul>
        <a href = "SkinCareTips.html" > <button class = "buttonK"> Lexo m&euml; shum&euml; </button> </a> 
        </div>

        <img id="keshilla_img" src="../fotot/keshillat.jpg" style='width:30%; align-items: center;' />
        </div>

    </section>



    

  
    <!-- Quote -->
    <section class="section3">
      <div class="hearts"> 
        <p id="borderimg1" style="font-size: 20px"> May your coffe be strong, your SPF stronger, and your Monday short. </p>
      </div>  
    </section>
        
    
        
    <!--se shpejti-->
      <section class="section4">
        <div> 
            <h2 class="title">S&euml; shpejti</h2>
          <div> 
            <div class="div5">
              <div class="newdiv-col">
                <img src="../fotot/produkt11.png" alt="produkt">
                  <div class="layer"> </div>
              </div>
              <div class="newdiv-col">
                <img src="../fotot/My project.png" alt="produkt">
              <div class="layer"></div>
              </div>
              <div class="newdiv-col">
                <img src="../fotot/produktiri.png" alt="produkt">
                  <div class="layer"></div>
              </div>
            </div>
              <br>
              <br>
          </div>
        </div>
      </section>


      <!-- footer section -->
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
        </div>
        <p class="copyright">&copy; PearlSkin</p>
      </section>
        
    </div>
    </section>
    <script src="home1.js"></script>
  </body>
</html>

