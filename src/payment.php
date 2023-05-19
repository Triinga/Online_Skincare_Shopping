<?php

include('../includes/connect.php');
include('../functions/common_functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="header.html">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <title>Payment page</title>
</head>
<style>
.payment_img{
    width: 100%;
    margin: auto;
    display: block;
}
    </style>
<body>
<?php
// php code to access user_id
$user_ip = getIPAddress();
$get_user = "Select * from user_table where user_ip = '$user_ip'";
$result = mysqli_query($con, $get_user);
$run_query = mysqli_fetch_array($result);
$user_id = $run_query['user_id'];

?>
    <div class="container">
        <h2 class = "text-center text-info">Payment Option</h2>
        <div class = "row d-flec justify-content:center align-items-center mt-5">
            <div class = "col-md-6">
            <a href="https://www.raiffeisen-kosovo.com/" target="_blank">
                <img src = "../fotot/payment.jpg" class="payment_img"></a>
            </div>  
            <div class = "col-md-6">
            <a href="order.php?user_id=<?php echo $user_id?>"><h2 class="text-center">Pay offline</h2></a>
            </div>  
        </div>
    </div>
</body>
</html>


