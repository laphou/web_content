<?php

session_start();
if(!(isset($_SESSION['username'])))
{
    header("Location: index.php");
}

//check to see what page user first visited
if(isset($_SESSION['url'])) {
	$url = $_SESSION['url'];
} else {
	$url = "../index.php";
}
//redirect user to page they initially visited
header("Location: $url");
?>