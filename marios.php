<!DOCTYPE html>
<html class="w3-container w3-center w3-animate-bottom">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSSαρχειο.css"  >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>


<?php
session_start();

// variable declaration
$email    = "";
$proorismos = "";
$sum    = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'trips');
mysqli_set_charset($db, "utf8");

// REGISTER USER
if (isset($_POST['travel'])) {
  // receive all input values from the form
  $email = $_POST['email'];
  $proorismos = $_POST['proorismos'];
  $sum = $_POST['sum'];
}

  	$query = "INSERT INTO totaltrips (email, proorismos, sum) 
  			  VALUES('$email', '$proorismos', '$sum')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
	$_SESSION['proorismos'] = $proorismos;
	$_SESSION['sum'] = $sum;
	
	$sql="DELETE FROM totaltrips WHERE sum IN (0)";
	$result	=	mysqli_query($db, $sql);
?>



</body>
</html>