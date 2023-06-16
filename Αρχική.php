<!DOCTYPE html>
<html class="w3-container w3-center w3-animate-bottom">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSSαρχειο.css"  >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Αρχική</title>
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
<nowp><a  href="./Αρχική.php"> Αρχική</a></nowp>
</td><td><a  href="./Επικοινωνία.php"> Επικοινωνία</a>
</td><td><a href="./Ταξιδέψτε.php">Ταξιδέψτε ΤΩΡΑ!</a>
</td><td><a  href="./Αμοργός.php"> Αμοργός</a>
</td><td><a  href="./Κεφαλονιά.php"> Κεφαλονιά</a>
</td><td><a  href="./Λευκάδα.php"> Λευκάδα</a>
</td><td><a  href="./index.php" target = "new">Σύνδεση</a></td></tr>
</table>
<br>  <br>  <br>

<h1>
Σε ποιο νησί θα επιλέξετε να κάνετε τις διακοπές σας;
Στην Αμοργό, στην Κεφαλονιά, ή στη Λευκάδα;
<h1>
<br>  <br>  <br>

 <!-- Slideshow container -->
<div class="slideshow-container" >

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="img1.jpg" style="width:100%">
    <div class="text"><h1>ΑΜΟΡΓΟΣ</h1><br></div>
  </div>

  <div class="mySlides fade">
    <img src="img2.jpg" style="width:100%">
    <div class="text"><h1>ΚΕΦΑΛΟΝΙΑ</h1></div>
  </div>

  <div class="mySlides fade">
    <img src="img3.jpg" style="width:100%">
    <div class="text"><h1>ΛΕΥΚΑΔΑ</h1></div>
  </div>
  
</div>
<br>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
} 
</script>


</body>
</html>