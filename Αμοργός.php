<!DOCTYPE html>
<html class="w3-container w3-center w3-animate-bottom">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSSαρχειο.css"  >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Αμοργός</title>
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
</td><td><nowp><a  href="./Αμοργός.php"> Αμοργός</a></nowp>
</td><td><a  href="./Κεφαλονιά.php"> Κεφαλονιά</a>
</td><td><a  href="./Λευκάδα.php"> Λευκάδα</a>
</td><td><a  href="./index.php" target = "new">Σύνδεση</a>
</td></tr>
</table>
 <br> <br> <br> 
<h1> Το νησί του απέραντου γαλάζιου.</h1>
<br><br><br>
 <h1>Μερικές παραλίες της Αμοργού:</h1>
 <br> <br> <br>
<div class="slideshow-container" >

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
    <img src="agiaanna.jpg" style="width:100%">
    <div class="text">Αγία Αννα</div>
  </div>

  <div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
    <img src="agpaulos.jpg" style="width:100%">
    <div class="text">Αγιος Παύλος</div>
  </div>

  <div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
    <img src="kalotaritisa.jpg" style="width:100%">
    <div class="text">Καλοταρίτισσα</div>
  </div>
  
  <div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
    <img src="katokampos.jpg" style="width:100%">
    <div class="text">Κάτω Κάμπος</div>
  </div>
  
  <div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
    <img src="mouros.jpg" style="width:100%">
    <div class="text">Μούρος</div>
  </div>
  
  <div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
    <img src="paradisia.jpg" style="width:100%">
    <div class="text">Παραδείσια</div>
  </div>
  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>
<script>

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>

 <br> <br> <br> <br> <br> 
 <h1>Τουριστικός οδηγός Αμοργού:</h1>
 <a class="odhgos" target=new, href="http://www.amorgos-online.gr/"><img src="odhgos.jpg"></a>

</body>
</html>