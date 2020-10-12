<?php

define('DB_HOST', 'database-1.c2fj7fxdnxzk.ap-southeast-1.rds.amazonaws.com'); // Replace with the name of your mysql server host
define('DB_USER', 'admin'); // Replace with your phpmyadmin username
define('DB_PASS', 'L1993Lapho'); // Replace with your phpmyadmin password
define('DB_NAME', 'user'); // Replace with the name of database you created
define('DB_PORT', '3306'); // Replace with the port of database you created

// Create a connection with the mysql database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT) or die("Some error occurred during connection, Please try again! " . mysqli_error($con));  ;

?>