<?php
$vardas = "";

#COOKIES
//setcookie("username", "Aivaras", time() + (60 * 60 * 24 *7), "/"); // 86400 = 1 day
/*
if(isset($_COOKIE["username"])) {
	$vardas = $_COOKIE["username"];
} else {
	$vardas = "nezinomas";
}*/

#SESIONS 

//session_start();

//$_SESSION['username'] = "Kambala";
/*
if(isset($_SESSION['username'])) {
	$vardas = $_SESSION['username'];
} else {
	$vardas = 'nezinomas';
}
*/

//include "coce.php";
include "view/login.php";
