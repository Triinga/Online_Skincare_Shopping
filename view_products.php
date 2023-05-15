<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
<!-- Font Awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- Font Awesome JS link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<h1 class="text-center text-success">view products</h1>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr>
            <th>Product_id</th>
            <th>Product title</th>
            <th>Product image</th>
            <th>Product price</th>
            <th>Total sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        
    <?php
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

    echo "<tr class='text-center'>
        <td>$product_id</td>
        <td>$product_title</td>
        <td><img src='./product_images/$product_image1' class='product_img'></td>
        <td>$product_price</td>
        <td>";
    
    $get_count = "SELECT * FROM `orders_pending` WHERE product_id = $product_id";
    $result_count = mysqli_query($con, $get_count);
    $rows_count = mysqli_num_rows($result_count);
    
    echo $rows_count;
    
    echo "</td>
        <td>$status</td>
        <td><a href='index.php?edit_products=" . $product_id . "' class='text-light'><i class='fas fa-pen'></i></a></td>
        <td><a href='index.php?delete_product=" . $product_id . "' class='text-light'><i class='fas fa-trash'></i></a></td>
    </tr>";
}
?>

    </tbody>
</table>
