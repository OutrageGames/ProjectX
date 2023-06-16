<?php include('server.php') ?>
<html class="w3-container w3-center w3-animate-bottom">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSSαρχειοphp.css"  >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Εγγραφή</title>
<body align="center">
<h1>MARIO TRAVEL</h1>
<style type="text/css">
input {font-size:12pt; font-family:tahoma; background-color:lightblue}
a:link {color:white}
a:hover {color:black;}
</style>

<table  >
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
  	<h1><u>Εγγραφή</u></h1>
 <br>  
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Όνομα χρήστη:<br></label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	<br>
  	<div class="input-group">
  	  <label>E-mail:<br></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<br>
  	<div class="input-group">
  	  <label>Κωδικός:<br></label>
  	  <input type="password" name="password_1">
  	</div>
	<br>
  	<div class="input-group">
  	  <label>Επιβεβαίωση κωδικού:<br></label>
  	  <input type="password" name="password_2">
  	</div>
	<br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Εγγραφή</button>
  	</div>
  	<p>
  		Εάν είστε ήδη μέλος: <a href="login.php">Συνδεθείτε!</a>
  	</p>
  </form>

</body>
</html>