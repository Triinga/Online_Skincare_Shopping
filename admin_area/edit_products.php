<?php 
    
    if(isset($_GET['edit_products'])){
        $edit_id=$_GET['edit_products'];
        // echo  $edit_id;
        $get_data= "SELECT * FROM `products` WHERE product_id='$edit_id'";
        $result=mysqli_query($con, $get_data);
        $row=mysqli_fetch_assoc($result);
        $product_title=$row['product_title'];
        // echo  $product_title;
        $product_description=$row['product_description'];
        $product_keywords=$row['product_keywords'];
        $category_id=$row['category_id'];
        $product_image1=$row['product_image1'];
 
        $brand_id=$row['brand_id'];
        $product_price=$row['product_price'];
        $product_price=$row['product_price'];

        //fetching category name
        $select_category="SELECT * FROM `categories` WHERE category_id=$category_id";
        $result_category=mysqli_query($con, $select_category);
        $row_category=mysqli_fetch_assoc($result_category);
        $category_title=$row_category['category_title'];
        // echo $category_title;

        
        //fetching brand name
        $select_brand="SELECT * FROM `brands` WHERE brand_id=$brand_id";
        $result_brand=mysqli_query($con, $select_brand);
        $row_brand=mysqli_fetch_assoc($result_brand);
        $brand_title=$row_brand['brand_title'];
        // echo $brand_title;

    }   
    
    ?>

<div class="container mt-5">
    <h1 class="text-center">Edit products</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Title</label>
            <input type="text" id="product_title" name="product_title" class="form-control"
            required="required" value="<?php echo $product_title ?>" > 
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Description</label>
            <input type="text" id="product_description" name="product_description" class="form-control"
            required="required"  value="<?php echo $product_description ?>">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="" class="form-label">Product Keywords</label>
            <input type="text" id="product_keywords" name="product_keywords" class="form-control"
            required="required" value="<?php echo $product_keywords ?>">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
           <label for="product_category" class="form-label">Product Categories</label>

           <select name="product_category" class="form-select">
            <option value="<?php echo $category_title ?>"><?php echo $category_title ?></option>
            <?php 
            
            $select_category_all="SELECT * FROM `categories` ";
            $result_category_all=mysqli_query($con, $select_category_all);
            while($row_category_all=mysqli_fetch_assoc($result_category_all)){
                $category_title=$row_category_all['category_title'];
                $category_id=$row_category_all['category_id'];
                echo "<option value='$category_id'>$category_title</option>";

            };
            // $category_title=$row_category_all['category_title'];

            ?>
  
           </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
           <label for="product_brands" class="form-label">Product Brands</label>

           <select name="product_brands" class="form-select">
           <option value="<?php echo $brand_title ?>"><?php echo $brand_title ?></option>

            <?php 
           $select_brand_all="SELECT * FROM `brands` ";
           $result_brand_all=mysqli_query($con, $select_brand_all);
           while($row_brand_all=mysqli_fetch_assoc($result_brand_all)){
               $brand_title=$row_brand_all['brand_title'];
               $brand_id=$row_brand_all['brand_id'];
               echo "<option value='$brand_id'>$brand_title</option>"; 
           };
           ?>
           </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class="form-label">Product Image1</label>
            <div class="d-flex">
            <input type="file" id="product_image1" name="product_image1" class="form-control  w-90
             m-auto" required="required">
            <img src="./product_images<?php echo $product_image1 ?>" alt="" class="product_img">
            </div>
        </div>

        
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" id="product_price" name="product_price" class="form-control"
            required="required" value="<?php echo $product_price ?>">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_products" value="Update product"
            class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>


<!-- editing products -->

<?php
if(isset($_POST['edit_products'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price =$_POST['product_price'];

    $product_image1=$_FILES['product_image1']['name'];
   

    $temp_image1 = $_FILES['product_image1']['tmp_name'];
   
    move_uploaded_file($temp_image1, "./product_images/$product_image1");
   
    


    //query to update products
    $update_product = "UPDATE `products` SET
    product_title = '$product_title',
    product_description = '$product_description',
    category_id = '$product_category',
    brand_id = '$product_brands',
    product_image1 = '$product_image1',
   
    product_price = '$product_price',
    `date` = NOW()
    WHERE product_id = '$edit_id'";
 //whatever data im having inside the database it is being updated
    $result_update=mysqli_query($con, $update_product);
    if($result_update){
        echo "<script>alert('product updated successfully')</script>";
        echo "<script>window.open('./insert_product.php','_self') </script>";
    }

}


?>


