<?php
//$vardas = "";

session_start();	

if (isset($_POST['username']) && isset($_POST['password'])) {
	#yra ivesti prisijungimo duomenis
	if	($_POST['username'] == "Aivaras" && $_POST['password'] == "bam"){
		$correct = "Correct!";
		#vartotojo vardas ir slaptazodis tinka

		$_SESSION['user']['username'] = $_POST['username'];
		$_SESSION['user']['level'] = 'admin';

	} else {
		# vartotojo vardas arba slaptazodis netinkamas
		$error = "Wrong username or password";
	}
}	else if (isset($_POST['submit'])) {
	#prisijungimo duomenis nebuvo ivesti
	$error = "no login date";
}



if (isset($_SESSION['user'])) {
	$vardas = $_SESSION['user']['username'];
	include "view/main.php";
}	else {
	include "view/login.php";
}

if (isset($_GET['logout'])) {
	session_destroy();
}
