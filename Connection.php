<?php
define ("DB_SERVER", "192.168.0.1");
define ("DB_USERNAME" , "user");
define ("DB_PASSWORD" , "PASS");
define ("DB_DATABASE" , "SkinCareDB");
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($db){
	echo "Connected successfully" ;
}
else{
	echo "Sorry no connection";
}

?>