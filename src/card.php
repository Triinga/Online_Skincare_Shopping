<!-- connect file -->
<?php
    include('../includes/connect.php');  //dont use dots cause folders are in the same level
include('../functions/common_functions.php');
session_start();
?>


<html>
<head>
<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="header.html">
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"  >
    <link rel="stylesheet" href = "style.css">
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"  >
    <link rel="stylesheet" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
    .card_img{
    width:80px;
    height:80px;
    object-fit:contain;
}

    </style>
</head>
<!-- calling card function -->
<?php
    card(); 
?>

    <body>

 
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


 <!-- #region -->
        <li class="nav-item">
            <a class="nav-link" href="card.php"><i class="fas fa-shopping-cart"></i><sup>
                <?php
                card_item();
                ?>
            </sup></a>
        </li>

    
</ul>
</nav>


<!-- third child --> 
<div class="bg-light"></div>
 <h3 class="text-center">Hidden Store</h3>
 <p class="text-center">Communciation is at the heart of the e-commerce and community</p>
 
 
<!-- fourth child -->
<div class="container">
    <div class="row">
        <form action="" method="post"> 
        <table class="table table-bordered text-center">
          
                <!-- php code to display dynamic data -->
                <?php
                //  global $con; //accessible throughut the function 
                //  $get_ip_add = getIPAddress();
                //  $total_price = 0;
                //  global $con; //accessible throughut the function 
                 $get_ip_add = getIPAddress();
                 $total_price=0;
                 $card_query="Select * from `card_details` where ip_address='$get_ip_add'";
                 $result = mysqli_query($con, $card_query); //suppose i have 4 users, kur tlogohet nbaze te ip addresses 
                 $result_count=mysqli_num_rows($result);//count the num of rows inside the database
                 if($result_count >0){
                    echo "  <thead>
                    <tr>
                        <th>Product title</th>
                        <th> Product image</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                        <th colspan='2'>Operations</th>
                    </tr>
                    </thead>
                    <tbody>";

                 while ($row=mysqli_fetch_array($result)){
                     $product_id=$row['product_id'];
                     $select_products="Select * from `products` where product_id='$product_id'";
                     $result_products = mysqli_query($con, $select_products);
                     while($row_product_price=mysqli_fetch_array($result_products)){
                         $product_price=array($row_product_price['product_price']);//[200,300]
                         $price_table=$row_product_price['product_price'];
                         $product_title=$row_product_price['product_title'];
                         $product_image1=$row_product_price['product_image1'];
                         $product_values=array_sum($product_price);//[500]
                         $total_price+=$product_values;//500
 
                
                    
                ?>
                <!-- <thead>
                    <tr>
                        <th>Product title</th>
                        <th> Product image</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                        <th colspan='2'>Operations</th>
                    </tr>
                    </thead>
                    <tbody> -->
                <tr>
                    <td><?php echo $product_title?></td>
                    <td><img src="../admin_area/product_images/<?php echo $product_image1 ?>" alt='' class='card_img'></td>
                    <td><input type="text" name="qty" class="form-input  w-50"></td>
                    <?php 
                    $get_ip_add = getIPAddress();
                    if(isset($_POST['update_card'])){
                        $quantities = $_POST['qty'];
                        $update_card = "UPDATE `card_details` SET `quantity` = '$quantities' WHERE `ip_address` = '$get_ip_add'";
                        $result_products_quantity = mysqli_query($con, $update_card);
    
                        $total_price = $total_price * (int)$quantities;
                    }

                    ?>
                    <td><?php echo $price_table ?></td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                    <td>
                       
                    <input type="submit" class="bg-info px-3 py-2 border-0 my-3" value="Update card"
                    name="update_card"> 
                      <!-- <button class="bg-info px-3 py-2 border-0 mx-3">Remove</button> -->
                      <input type="submit" class="bg-info px-3 py-2 border-0 my-3" value="Remove card"
                    name="remove_card"> 
                    
                    </td>
                     
                </tr>
                <?php
                        }
                        }
                 }

                else {
                    echo "<h2 class='text-center text-danger'> Card is empty </h2>";
                }
                ?>
            </tbody>
        </table>
        <!-- subtotal -->
        <div class="d-flex mb-5">
            <?php
                $get_ip_add = getIPAddress();
                // $total_price=0;
                $card_query="Select * from `card_details` where ip_address='$get_ip_add'";
                $result = mysqli_query($con, $card_query); //suppose i have 4 users, kur tlogohet nbaze te ip addresses 
                $result_count=mysqli_num_rows($result);//count the num of rows inside the database
                if($result_count >0){
                echo "<h4 class='px-3'>Subtotal: <strong class='text-info'>echo $total_price 
                </strong></h4>
                <input type='submit' class='bg-info px-3 py-2 border-0 mx-3' value='Continue shopping'
                name='continue_shopping'> 
                            <a href='checkout.php'> <button class='bg-secondary p-3 py-2 border-0'>Checkout</a>";
                }
                else{
                 echo "   <input type='submit' class='bg-info px-3 py-2 border-0 mx-3' value='Continue shopping'
                    name='continue_shopping'> " ;                   
                }
                if(isset($_POST['continue_shopping'])){
                    echo "<script>window.open('products.php','_self')</script>";
                }

            ?>
            
            </form>
            <!-- function to remove items -->
            <?php
                function remove_cart_item(){
                    global $con;
                    if(isset($_POST['removeitem'])){
                        foreach($_POST['removeitem']as $remove_id){
                            echo $remove_id;
                            $delete_query="DELETE FROM `card_details` WHERE product_id=$remove_id";
                            $run_delete=mysqli_query($con,$delete_query);
                            if($run_delete){
                                echo "<script>window.open('card.php','_self')</script>";
                            }
                        }
                    }
                }

                echo $removeitem= remove_cart_item(); 
            ?>
        </div>
        </div>
</div>

</body>
</html>
