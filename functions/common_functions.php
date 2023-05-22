<?php
    //including connect file 
    include('../includes/connect.php');
    //getting products 
    function getProducts(){
        global $con;
        //condition to check isset or not
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
        $select_query="Select * from `products`";
        $result_query=mysqli_query($con, $select_query);
    
        while($row = mysqli_fetch_assoc($result_query)){ ;//to access all tha data in the database
        // echo $row['product_title'];
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo  "<div class='col-md-4 mb-5'>
        <div class='card' >
            <img src='../admin_area/product_images/$product_image1' class='card-img-top' alt=' $product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'> $product_description</p>
                <p class='card-text'> $product_price</p>
                <a href='products.php?add_to_cart=$product_id' class='btn btn-info d-flex justify-content-center'>Add to cart</a>

            </div>
            </div>
        </div>"; //<!-- //whenever dadta we are habing here that will bbe displayed in horizntal -->
   
        }
        }
        }
        }



//getting unique categories
function getUniqueCategories(){
    global $con;
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
        $select_query="Select * from `products` where category_id=$category_id";
        $result_query=mysqli_query($con, $select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
            echo "<h2 class='text-center text-danger'>No stock for this category</h2>"; 
        } 
        while($row = mysqli_fetch_assoc($result_query)){ ;//to access all tha data in the database
        // echo $row['product_title'];
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo  "<div class='col-md-4 mb-2'>
        <div class='card' >
            <img src='../admin_area/product_images/$product_image1' class='card-img-top' alt=' $product_title'>
            <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'> $product_description</p>
                <p class='card-text'> $product_price</p>
                <a href='products.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>

            </div>
            </div>
        </div>"; //<!-- //whenever dadta we are habing here that will bbe displayed in horizntal -->
    } 
    }
}
    

   //getting unique brands
   function getUniqueBrands(){
    global $con;
//condition to check isset or not
if(isset($_GET['brand'])){
$brand_id=$_GET['brand'];
$select_query="Select * from `products` where brand_id=$brand_id";
$result_query=mysqli_query($con, $select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>This brand is not available for service  </h2>"; 
} 
while($row = mysqli_fetch_assoc($result_query)){ ;//to access all tha data in the database
// echo $row['product_title'];
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
echo  "<div class='col-md-4 mb-2'>
<div class='card' >
    <img src='../admin_area/product_images/$product_image1' class='card-img-top' alt=' $product_title'>
    <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'> $product_description</p>
        <p class='card-text'> $product_price</p>
        <a href='products.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
        <a href='#' class='btn btn-secondary'>View more</a>

    </div>
    </div>
</div>"; //<!-- //whenever dadta we are habing here that will bbe displayed in horizntal -->
} 
}
}


    // displaying brands in sidenav
    function getBrands(){
        global $con;
     
        $select_brands="SELECT * FROM `brands`"; //selecting all data from the brands table
        $result_brands=mysqli_query($con,  $select_brands); //to use connection variable first we have to include that file where we have that connection 
       $row_data=mysqli_fetch_assoc($result_brands);
       // echo $row_data['brand_title'];
       // echo $row_data['brand_title'];
       // echo $row_data['brand_title'];
       while($row_data=mysqli_fetch_assoc($result_brands)){
           $brand_title=$row_data['brand_title'];
           $brand_id=$row_data['brand_id'];
           echo "<li class='nav-item'>
           <a href='products.php?brand=$brand_id' class='nav-link text-light text-center'>$brand_title</a>
       </li>";
       }
    }

    //displaying categories in sidenav 
    function getCategories(){
        global $con;
           $select_categories="SELECT * FROM `categories`"; //selecting all data from the brands table
        $result_categories=mysqli_query($con,  $select_categories); //to use connection variable first we have to include that file where we have that connection 
       $row_data=mysqli_fetch_assoc($result_categories);
       while($row_data=mysqli_fetch_assoc($result_categories)){
           $category_title=$row_data['category_title'];
           $category_id=$row_data['category_id'];
           echo "<li class='nav-item'>
           <a href='products.php?category=$category_id' class='nav-link text-light text-center'> $category_title</a>
       </li>";
       }
    }

    //searching products function

    function search_product(){
        global $con;
        if(isset($_GET['search_data_product'])){//once it is clicked i have to access this value
            $search_data_value=$_GET['search_data'];//whatever value we are accessing from the url i am storing inside this variable 
            $search_query="Select * from `products` where product_keywords like '%$search_data_value%'";
            $result_query=mysqli_query($con, $search_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows==0){
                echo "<h2 class='text-center text-danger'>No results match. No products for this category</h2>"; 
            } 
        while($row = mysqli_fetch_assoc($result_query)){ ;//to access all tha data in the database
            // echo $row['product_title'];
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            echo  "<div class='col-md-4 mb-2'>
            <div class='card' >
                <img src='../admin_area/product_images/$product_image1' class='card-img-top' alt=' $product_title'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'> $product_description</p>
                <p class='card-text'> $product_price</p>
                    <a href='products.php?add_to_cart=$product_id' class='btn btn-info d-flex justify-content-center '>Add to cart</a>                   
    
                </div>
                </div>
            </div>"; //<!-- //whenever dadta we are habing here that will bbe displayed in horizntal -->
       
            } 
        
        }
 
        }
        //get ip function 
        function getIPAddress() {  
            //whether ip is from the share internet  
             if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                        $ip = $_SERVER['HTTP_CLIENT_IP'];  
                }  
            //whether ip is from the proxy  
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
             }  
        //whether ip is from the remote address  
            else{  
                     $ip = $_SERVER['REMOTE_ADDR'];  
             }  
             return $ip;  
        }
        // $ip = getIPAddress();  
        // echo 'User Real IP Address - '.$ip;    

        //cart function 
        function card(){
            if(isset($_GET['add_to_cart'])){
                global $con; //bcs we are having connection varibale in seperate files 
                $get_ip_add = getIPAddress();
                $get_product_id = $_GET['add_to_cart'];
                $select_query="select * from `card_details` where ip_address='$get_ip_add' 
                and product_id = $get_product_id";
            $result_query=mysqli_query($con,$select_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows>0){
                echo "<script>alert('this item is already inside card')</script>";
                echo "<script>window.open('products.php','_self')</script>"; 
            } else{
                $insert_query = "INSERT INTO `card_details` (product_id, ip_address, quantity) 
                VALUES ('$get_product_id', '$get_ip_add', 0)";

                $result_query=mysqli_query($con, $insert_query);
                echo "<script>alert('item is added to card')</script>";
                echo "<script>window.open('products.php','_self')<script>";
               
            }
            }
        }

        //function to get card item numbers
            function card_item(){
                if(isset($_GET['add_to_cart'])){
                    global $con; //bcs we are having connection varibale in seperate files 
                    $get_ip_add = getIPAddress();
                    $select_query="select * from `card_details` where ip_address='$get_ip_add'";
                $result_query=mysqli_query($con,$select_query);
                $count_card_items =mysqli_num_rows($result_query);
                }
            else{
                global $con; //bcs we are having connection varibale in seperate files 
                $get_ip_add = getIPAddress();
                $select_query="select * from `card_details` where ip_address='$get_ip_add'";
                $result_query=mysqli_query($con,$select_query);
                $count_card_items =mysqli_num_rows($result_query);  
                }
                echo $count_card_items; 
            }

            //total price function 
            function total_cart_price(){
                global $con; //accessible throughut the function 
                $get_ip_add = getIPAddress();
                $total_price=0;
                $card_query="Select * from `card_details` where ip_address='$get_ip_add'";
                $result = mysqli_query($con, $card_query); //suppose i have 4 users, kur tlogohet nbaze te ip addresses 
                while ($row=mysqli_fetch_array($result)){
                    $product_id=$row['product_id'];
                    $select_products="Select * from `products` where product_id='$product_id'";
                    $result_products = mysqli_query($con, $select_products);
                    while($row_product_price=mysqli_fetch_array($result_products)){
                        $product_price=array($row_product_price['product_price']);//[200,300]
                        $product_values=array_sum($product_price);//[500]
                        $total_price+=$product_values;//500

                    }
                }
                echo $total_price;
            }

                 function get_user_order_details(){
                global $con; 
                $username = $_SESSION['username'];
                $get_details = "SELECT * FROM user_table WHERE username = '$username'";
                $result_query = mysqli_query($con, $get_details);
                
                while($row_query = mysqli_fetch_array($result_query)){
                    $user_id = $row_query['user_id'];
                    
                    if(!isset($_GET['edit_account'])){
                        if(!isset($_GET['my_orders'])){
                            if(!isset($_GET['delete_account'])){
                                $get_orders = "SELECT * FROM `user_orders` WHERE user_id = $user_id 
                                AND order_status = 'pending'";
                                $result_orders_query = mysqli_query($con, $get_orders);
                                $row_count = mysqli_num_rows($result_orders_query);
                                
                                if($row_count > 0){
                                    echo "<h3 class='text-center text-success mt-5 mb-2'>You have 
                                    <span class='text-danger'>$row_count</span> 
                                    pending orders</h3> 
                                    <p class='text-center'><<a href='profile.php?my_orders' 
                                    class='text-dark'>Order Details</a></p>";
                                }else{
                                    echo "<h3 class='text-center text-success mt-5 mb-2'>You have zero pending orders</h3> 
                                    <p class='text-center'><<a href='products.php?my_orders' class='text-dark'> Explore products</a></p>";
                                }
                            }
                        }   
                            }
                        } 
                      
            }
    
?>