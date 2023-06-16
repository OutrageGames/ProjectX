<!DOCTYPE html>
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

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: register.php");
  }
?>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
	
<?php
	/*$db = mysqli_connect('localhost', 'root', '', 'regtest');

		$sql  =  "SELECT email FROM persons WHERE username='".$_POST['username']."'";
		$result= mysqli_query($db, $sql);
		$row = mysqli_fetch_assoc($result);
*/
?>
<?php
$dba = mysqli_connect('localhost', 'root', '', 'regtest');
if (!$dba) {
die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($dba, "utf8");
$sqla   =   "SELECT   email  FROM persons WHERE username='".$_SESSION['username']."'";
$resulta= mysqli_query($dba, $sqla);
$rowa = mysqli_fetch_assoc($resulta);
?>
		


		

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h1><p>Καλωσήρθες, <strong><?php echo $_SESSION['username']; ?></strong></p></h1>
    	<h1><p> <a href="index.php?logout='1'" style="color: red;">ΑΠΟΣΎΝΔΕΣΗ</a> </p></h1>
	
	


		
		<?php
// Δημιουργίασύνδεσης
$db = mysqli_connect('localhost', 'root', '', 'trips');
// Έλεγχοςσύνδεσης
if (!$db) {
die("Connection failed: " . mysqli_connect_error());
}
//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($db, "utf8");
//Δημιουργίαερωτήματος
//$sql = "SELECT AM, LAB1, LAB2, LAB3,LAB4,LAB5 FROM presence";
//$sql = "SELECT AM, LAB1, LAB2, LAB3,LAB4,LAB5,LAB6 FROM presence WHERE AM = 'Π17132' ";
//if (isset($_POST['am']) && $_POST['am']!='' ){
$sql  =  "SELECT id,email, proorismos, sum FROM totaltrips WHERE email='".$rowa['email']."'";
//} else {
//$sql   =   "SELECT   id,email,   proorismos,   sum  FROM presence WHERE email='ΧΧΧΧΧΧ' ";
//}


//εκτέλεση ερωτήματος στη βάση
$result= mysqli_query($db, $sql);
//έλεγχοςαποτελεσμάτων
if(mysqli_num_rows($result) > 0) {
echo "<h1><table>";
echo "<tr><th>Προορισμός</th><th>Τιμή</th></tr>";
// εκτύπωσηαποτελεσμάτων
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>".$row['proorismos']."</td>".
"<td>".$row['sum']."</td></tr>";
}
echo "</table>" ;
} else {
echo "Δεν βρέθηκαν ταξίδια";
}
//κλείσιμοσύνδεσης
mysqli_close($db);
?> 


    <?php endif ?>
</div>
		
</body>
</html>