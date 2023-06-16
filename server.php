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
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'regtest');
mysqli_set_charset($db, "utf8");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled
  if (empty($username)) { array_push($errors, "Το όνομα χρήστη επιβάλλεται!"); }
  if (empty($email)) { array_push($errors, "Το e-mail επιβάλλεται!"); }
  if (empty($password_1)) { array_push($errors, "Ο κωδικός επιβάλλεται!"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Οι κωδικοί δεν ταιριάζουν.");
  }

  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database
  	$query = "INSERT INTO persons (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Συνδεθήκατε!";
  	header('location: index.php');
  }

}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Το όνομα χρήστη επιβάλλεται!");
  }
  if (empty($password)) {
  	array_push($errors, "Ο κωδικός επιβάλλεται!");
  }

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM persons WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Είστε συνδεδεμένος.";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Λάθος συνδυασμός!");
  	}
  }
}

?>
</body>
</html>