<html class="w3-container w3-center w3-animate-bottom">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSSαρχειο.css"  >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Ταξιδέψτε τώρα!</title>
</head>
<body align="center">
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
</td><td><nowp><a href="./Ταξιδέψτε.php">Ταξιδέψτε ΤΩΡΑ!</a></nowp>
</td><td><a  href="./Αμοργός.php"> Αμοργός</a>
</td><td><a  href="./Κεφαλονιά.php"> Κεφαλονιά</a>
</td><td><a  href="./Λευκάδα.php"> Λευκάδα</a>
</td><td><a  href="./index.php" target = "new">Σύνδεση</a>

</td></tr>
</table>
 <br>  <br>  <br> 
<h1>
Ενήλικες: 25 ευρώ η μία διαδρομή. 30 ευρώ η νύχτα.
<br>
Παιδιά: 10 ευρώ η μία διαδρομή. 20 ευρώ η νύχτα.
<br>
--------------------------------------------------
</h1>

 <form  onsubmit="fun1()" >
 <h1>Προορισμός:</h1> 
 <select id="mySelect" name="mySelect" size="3" style="width: 500px;" >
<option value="Αμοργός">Αμοργός</option>
<option value="Κεφαλονιά">Κεφαλονιά</option>
<option value="Λευκάδα">Λευκάδα</option>
</select>
<br><br><br>
  E-mail: <input type="email" id = "email" name="email" ><br><br><br>
  Αναχώρηση:  <input type="date" id="fyge" name="αφ">
  Άφιξη: <input type="date" id="gyrna" name="αν">
  <br><br><br>
  Νύχτες: <input type="number" id="nights" name="nights" min="1">
  <br><br><br>
  Ενήλικες: <input type="number" id="adults" min="1" >
  Παιδιά: <input type="number" id="kids" min="0" ><br><br>
  <input type="number" id="sum" name="sum" hidden>
  <input type="text" id="proorismos" hidden >
  <br><br>
  <input type="reset" value="Καθαρισμός">
   <input  onmouseover="mouseOver()" type="submit" value="Επιβεβαίωση"  class="btn" >
</form>
<p id="sum"></p>


<script>
var fyge, gyrna, nights, adults, kids, ticketadults, ticketkids, sum, txt,  proorismos, email;


function mouseOver() {
    nights = document.getElementById("nights").value;
	adults = document.getElementById("adults").value;
	kids = document.getElementById("kids").value;
	
	fyge = Date.parse(document.getElementById("fyge").value);
	gyrna = Date.parse(document.getElementById("gyrna").value);
	
	ticketadults = 25 * adults * 2;
	ticketkids = 10 * kids * 2;
	
	sum = (adults * nights * 30) + (kids * nights * 20) + ticketadults + ticketkids;
	email = document.getElementById("email").value
	proorismos = document.getElementById("mySelect").value
	
	
	document.getElementById("sum").value = sum;
	document.getElementById("proorismos").value = proorismos;
	document.getElementById("email").value = email;
	
	localStorage.setItem("proorismos", proorismos);
	localStorage.setItem("sum", sum);
	localStorage.setItem("email", email);
}
function fun1(){
	
	
	if (fyge>=gyrna) {
	alert("Λανθασμένη ημερομηνία!");
	return false;
	}
	
	if (nights == "" || adults == "") {
	alert("Κάτι παραλείψατε!");
	return false;
	}
	


	
	window.open("Confirm.php"); 
	/*
    if (confirm("\nΠροορισμός: " + proorismos + "\nΣυνολική τιμή: " + sum + " ευρώ.") == true) {
        //txt = "You pressed OK!";
		
		
    } else {
        //txt = "You pressed Cancel!";
		
    }*/
}


</script>


</body>
</html>


