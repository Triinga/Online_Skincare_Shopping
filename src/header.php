<!-- 
      <header>
   
            <a class="logo" href="#"><img src="fotot/logo2.png" id="logo" alt="Logo" style="width:100px"></a>
            <div class="items"> 
		    <input type="search" class = "search" placeholder=" &ccedil;fare po kerkoni?">

		    <button type="submit" class=" fas fa-search"> </button>  
		      <div class="login" >   
			      <a href="Login.html" target="_blank"> <i class="fa-solid fa-user"></i></a>
		      </div>
            </div>
      </header>
      
      <header class="hdr">
        <nav>
            <ul class="nav_linqet">
                <li><a href="home.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="about-us.html">About us</a></li>
                <li><a href="Login.html">Log in</a></li>
                <li><a href="contact-us.html">Contact us</a></li>
                <li><a href="faq.php">FAQ</a> </li>
            </ul>
        </nav>
  </header> -->
  <?php
    include('../includes/connect.php'); 
include('../functions/common_functions.php');

card(); 
?>
<header class="hdr>
<nav>
    <ul>
   <li> 
       <li>  <a class='logo' href='#'><img src='../fotot/logo2.png' id="'logo' alt='Logo' style='width:100px'></a> </li>
       <li> <div class='items'> </li>
          <li class='nav-item'> 
                <form class='d-flex' action='search_product.php' method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                    <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                </form>
            </li>
            <li>
                <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                    <ul class="navbar-nav me-auto">
                        <?php
                        if (!isset($_SESSION['username'])) {
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='#'>Welcome Guest</a>
                                </li>";
                        } else {
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='#'>Welcome " . $_SESSION['username'] . "</a>
                                </li>";
                        }

                        if (!isset($_SESSION['username'])) {
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='login.php'>Login</a>
                                </li>";
                        } else {
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='logout.php'>Logout</a>
                                </li>";
                        }
                        ?>
                    </li>
                    <li>
                    <div class="login">
                        <a href="Login.html" target="_blank"><i class="fa-solid fa-user"></i></a>
                    </div>
                    </li>
                   <li> <div class="nav-item">
                        <a class="nav-link" href="card.php"><i class="fas fa-shopping-cart"></i><sup> </li>
                            <?php
                            card_item();
                            ?>
                            </sup></a>
                    
                <li>    <div class="nav-item">
                        <a class="nav-link" href="#">Total price: <?php total_cart_price(); ?></a> </li>
                    </div>
                </nav>
            
        </div>
    </div>
    </ul>
</header>



    
        
      



<header class="hdr">
    <nav>
        <ul class="nav_linqet">
            <li><a href="home.php">Home</a></li>
            <li class="submenu">
                <a href="products.php">Products</a>
                <ul class="submenu-items">
                  
                    <?php
                   
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

