<?php

if(isset($_GET['delete_order'])){
    $delete_order = $_GET['delete_order'];

    $delete_query = "DELETE FROM `user_orders` WHERE order_id = $delete_order";
    $result = mysqli_query($con, $delete_query);
    if($result){
        echo "<script>alert('order deleted successfully')</script>";
        echo "<script>window.open('./index.php?list_order', '_self')</script>";
    }
}

?>