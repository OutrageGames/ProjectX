<?php include ('marios.php') ?>
<html class="w3-container w3-center w3-animate-bottom">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSSαρχειο.css"  >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>ΤΑΞΙΔΙΩΤΙΚΟ ΓΡΑΦΕΙΟ</title>
</head>
<body align="center">
<h1>ΤΑΞΙΔΙΩΤΙΚΟ ΓΡΑΦΕΙΟ</h1>
<style type="text/css">
input {font-size:12pt; font-family:tahoma; background-color:lightblue}
a:link {color:white}
a:hover {color:black;}
</style>



 <form method="post" action="Confirm.php">
 <h1><u>Ταξίδι:</u></h1> 

  Προορισμός: <br> <input class="input-group" type="text" id="proorismos" name="proorismos" value = x readonly>
  <br><br>
  Συνολικά έξοδα:<br> <input type="num" id="sum" name="sum" value = y readonly>
  <br><br>
  E-mail:<br> <input type="email" id="email" name="email" value = z readonly>
  <br><br>
  
  <input   type="button" value="Άκυρο" onclick="self.close()">
  <input  type="submit"   class="btn" value="Επιβεβαίωση" name="travel" onsubmit="self.close()">
</form>

<script>
	function findvalues() {
	x = localStorage.getItem("proorismos");
    y = localStorage.getItem("sum");
	z = localStorage.getItem("email");
}
	findvalues();
	document.getElementById("proorismos").value = x;
	document.getElementById("sum").value = y;
	document.getElementById("email").value = z;
	
</script>



</body>
</html>


