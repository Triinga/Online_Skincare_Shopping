<?php

if(isset($_GET['delete_brands'])){
    $delete_brands = $_GET['delete_brands'];
    // echo $delete_category; 
    // delete query

    $delete_query = "DELETE FROM `brands` WHERE brand_id = $delete_brands";
    $result = mysqli_query($con, $delete_query);
    if($result){
        echo "<script>alert('Brands deleted successfully')</script>";
        echo "<script>window.open('./index.php?view_brands', '_self')</script>";
    }
}

?>