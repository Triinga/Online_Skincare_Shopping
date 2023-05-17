<?php

session_start();
session_unset();
session_destroy();

echo "<script>window.open('../src/login.php', '_self')</script>";

?>


