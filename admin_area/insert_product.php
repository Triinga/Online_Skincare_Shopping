<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){ //we checkk if the button is clicked only hen the data should be inserted 

    $product_title=$_POST['product_title']; //psh nese te enter product title  e shtyp fresh mango, ksaj iu qasemi permes $product_title edhe fresh mango will be stored inside this variable
$description=$_POST['description'];
$product_keywords=$_POST['product_keywords'];
$product_category=$_POST['product_category'];
$product_brands=$_POST['product_brands'];
$product_price=$_POST['product_price'];
$product_status = 'true'; 
//accessing images 
$product_image1=$_FILES['product_image1']['name'];

//accessing image temporary name
$temp_image1=$_FILES['product_image1']['tmp_name'];

//checking empty condition
if($product_title== '' or $description == '' or $product_keywords == '' or $product_category == '' or 
$product_brands == '' or  $product_price=='' or $product_image1==''
){

echo"<script>alert('Please fill all the available fields')</script>";
exit();
}else{ //now whenever i insert the images inside the home it will be moved by itsel
    move_uploaded_file($temp_image1,"./product_images/$product_image1");


    //insert query
    $insert_products="insert into `products` (
    product_title, product_description, product_keywords, category_id, brand_id, product_image1,
     product_price,date,status) 
     values ('$product_title', '$description', '$product_keywords', 
     '$product_category', '$product_brands','$product_image1',
       '$product_price', NOW(), '$product_status')";
     $result_query=mysqli_query($con, $insert_products);
     if($result_query){
        echo "<script>alert('Successfully inserted the products ')</script>";
        echo "<script>window.open('view_products.php','_self')</script>";

     }
}
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products-Admin Dashboard</title>
    <link rel="stylesheet" href = "style.css">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">
    <div>
    </div>
    <div class="container my-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <!-- title -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label ">Product title</label>
            <input type="text" name="product_title" id="product_title" class="form-control"
            placeholder="Enter Product title" autocomplete="off" require="required"> <!-- name you can give whatever you want but id the same as the for os the label -->
            </div>
<!-- description -->
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label ">Product description</label>
            <input type="text" name="description" id="product_description" class="form-control"
            placeholder="Enter Product description" autocomplete="off" require="required"> <!-- name you can give whatever you want but id the same as the for os the label -->
            </div>
            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label ">Product keyword</label>
            <input type="text" name="product_keywords" id="product_keywords" class="form-control"
            placeholder="Enter Product keywords" autocomplete="off" require="required"> <!-- name you can give whatever you want but id the same as the for os the label -->
            </div>
        <!-- categories -->
        </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <?php
                    $select_query="select * from `categories`"; // all the data inside the categories 
                    $result_query =mysqli_query($con, $select_query); //to execute the query, connection variable, edhe queryn
                    while($row = mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id']; //i have just extracted all the data that is presenteded inside the database
                        echo "<option value=' $category_id'> $category_title</option>";
                

                    }


                    ?> 
                </select>
            </div>
            <!-- brands -->
               <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a brand</option>
                    <?php
                    $select_query="select * from `brands`"; // all the data inside the categories 
                    $result_query =mysqli_query($con, $select_query); //to execute the query, connection variable, edhe queryn
                    while($row = mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id']; //i have just extracted all the data that is presenteded inside the database
                        echo "<option value=' $brand_id'> $brand_title</option>";
                    }
                    ?> 
                    <!-- <option value="">Brand1</option>
                    <option value="">Brnd22</option>
                    <option value="">Brand33</option>
                    <option value="">Brand4</option> -->
                </select>
            </div>
            <!-- Image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label ">Product Image 1</label>
            <input type="file" name="product_image1" id="product_image1" class="form-control"
             require="required"> <!-- name you can give whatever you want but id the same as the for os the label -->
            </div>
           
                
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label ">Product price</label>
            <input type="text" name="product_price" id="product_price" class="form-control"
            placeholder="Enter Product price" autocomplete="off" require="required"> <!-- name you can give whatever you want but id the same as the for os the label -->
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" id="product_keywords" class="btn btn-info mb-3 px-3"
            value="Insert product"/>

        </form> <!-- enctype - to allow u to put pictures -->
    </div>
    
</body>
</html>