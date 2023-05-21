<?php

if(isset($_GET['list_users'])){
    $delete_user = $_GET['list_users'];

    $delete_query = "DELETE FROM `user_table` WHERE user_id = $delete_category";
    $result = mysqli_query($con, $delete_query);
    if($result){
        echo "<script>alert('user deleted successfully')</script>";
        echo "<script>window.open('./index.php?list_users', '_self')</script>";
    }
}

?>