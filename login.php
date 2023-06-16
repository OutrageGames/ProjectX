<?php include('server.php') ?>
<html class="w3-container w3-center w3-animate-bottom">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSSαρχειοphp.css"  >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Σύνδεση</title>
</head>
<body>
<h1>MARIO TRAVEL</h1>
<style type="text/css">
input {font-size:12pt; font-family:tahoma; background-color:lightblue}
a:link {color:white}
a:hover {color:black;}
</style>


<table>
<tr><td>
<a  href="./Αρχική.php"> Αρχική</a>
</td><td><a  href="./Επικοινωνία.php"> Επικοινωνία</a>
</td><td><a href="./Ταξιδέψτε.php">Ταξιδέψτε ΤΩΡΑ!</a>
</td><td><a  href="./Αμοργός.php"> Αμοργός</a>
</td><td><a  href="./Κεφαλονιά.php"> Κεφαλονιά</a>
</td><td><a  href="./Λευκάδα.php"> Λευκάδα</a>
</td><td><nowp><a  href="./index.php" target = "new">Σύνδεση</a></nowp>

</td></tr>
</table>

  <link >
<body>
  <div class="header">
  	<h1><u>Σύνδεση</u></h1>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Όνομα χρήστη:<br></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Κωδικός:<br></label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
	<br>
  		<button type="submit" class="btn" name="login_user">Σύνδεση</button>
  	</div>
  	<p>
  		Εάν δεν είστε μέλος: <a href="register.php">Εγγραφείτε!</a>
  	</p>
  </form>
</body>
</html>