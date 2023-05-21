<?php
// change_password.php

include('../includes/connect.php'); // Include the file that establishes the database connection
include('../functions/common_functions.php'); // Include any necessary common functions
session_start();

// Retrieve the current user's username from the session if it is set
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect the user to the login page or display an error message
    // if the 'username' key is not set in the session
    // Example:
    // header('Location: login.php');
    // exit();
}

if (isset($_POST['change_password'])) {
    // Retrieve the submitted form data
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate the form data
    if (empty($newPassword) || empty($confirmPassword)) {
        echo "<script>alert('Please fill in all fields')</script>";
    } elseif ($newPassword !== $confirmPassword) {
        echo "<script>alert('New password and confirm password do not match')</script>";
    } else {
        // Generate the hashed password for the new password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update the user's password in the database
        $updateQuery = "UPDATE user_table SET password = '$hashedPassword' WHERE username = '$username'";
        mysqli_query($con, $updateQuery);

        echo "<script>alert('Password changed successfully')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
}
?>

<!-- Add the following HTML code to your existing change_password.php file -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body {
            background-color: #f8d7da;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: black;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: gray;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1>Change Password</h1>
    <form method="post" action="">
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <button type="submit" name="change_password">Change Password</button>
    </form>
</body>
</html>
