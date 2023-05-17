<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
<!-- Font Awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- Font Awesome JS link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<h1 class="text-center text-success">View Products</h1>

<!-- <table class="table table-bordered mt-5">
    <thead class="bg-info text-white">
        <tr>
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total Sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light"> -->
        
    <div class="row mt-5">

        
    <?php
    include('../includes/connect.php');
$get_products = "SELECT * FROM `products`";
$result = mysqli_query($con, $get_products);
$number = 0;
while ($row = mysqli_fetch_assoc($result)) {
    // Fetch all the data from the database 
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $status = $row['status'];
    $number = 0;

    // echo "<tr class='text-center'>
    //     <td>$product_id</td>
    //     <td>$product_title</td>
    //     <td><img src='./product_images/$product_image1' class='product_img'></td>
    //     <td>$product_price</td>
    //     <td>";
    
    $get_count = "SELECT * FROM `orders_pending` WHERE product_id = $product_id";
    $result_count = mysqli_query($con, $get_count);
    $rows_count = mysqli_num_rows($result_count);

    
    // echo $rows_count;
    
    // echo "</td>
    //     <td>$status</td>
    //     <td><a href='index.php?edit_products=" . $product_id . "' 
    //     class='text-light'><i class='fas fa-pen'></i></a></td>
    //     <td><a href='index.php?delete_product=" . $product_id . "' 
    //     class='text-light'><i class='fas fa-trash'></i></a></td>
    // </tr>";

    ?>
    <div class="col-md-4 mb-4">
            <div class="card">
                <img src="./product_images/<?php echo $product_image1; ?>" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product_title; ?></h5>
                    <p class="card-text">Price: $<?php echo $product_price; ?></p>
                    <p class="card-text">Total Sold: <?php echo $rows_count; ?></p>
                    <p class="card-text">Status: <?php echo $status; ?></p>
                    <a href="index.php?edit_products=<?php echo $product_id; ?>" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a>
                    <a href="index.php?delete_product=<?php echo $product_id; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>
        <?php

}
?>
</div>
