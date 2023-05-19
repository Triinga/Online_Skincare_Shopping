<!DOCTYPE html>
<html>
<head>
    <title>Delete Account</title>
    <link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="header.html">
</head>
<body>
    <h3 class="text-danger mb-4 text-center mt-5">Delete Account</h3>
    <form action="" method="post" class="mt-5">
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="delete" value="Delete Account">
        </div>
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="dont_delete" value="Don't Delete Account">
        </div>
    </form>

    <?php 
    $username_session = $_SESSION['username'];
    if(isset($_POST['delete'])){
        $delete_query = "DELETE FROM user_table WHERE username = '$username_session'";
        $result = mysqli_query($con, $delete_query);
        if($result){
            session_destroy();
            echo "<script>alert('Account deleted successfully')</script>";
            echo "<script>window.open('products.php', '_self')</script>";
        }
    }

    if(isset($_POST['dont_delete'])){
        echo "<script>window.open('profile.php', '_self')</script>";
    }
    ?>
</body>
</html>
