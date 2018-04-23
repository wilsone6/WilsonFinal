<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Erin's Globo Gym</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1>Welcome to</a></h1>
      <center><h1>Erin's Globo Gym</h2></center>
    </div>
    <nav>
      <ul>
	   <li><a href="home.php">Home</a></li>
	    <li><a href="packages.php">Packages</a></li>
		 <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>
</div>
<br>
<br>
<!-- Slideshow container -->
<div class="slideshow-container">
  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/demo/gym.jpg" style="width:100%">
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/demo/about.jpg" style="width:100%">
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/demo/yoga4.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
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
<br>
<br>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->

    <!-- main content -->
    <section id="homepage" class="last clear">
      <!-- article 1 -->
      <article class="one_third">
        <h2>Cycle</h2>
        <img src="images/demo/cycle.jpg" alt="">
        <p>Cycling is mainly an aerobic activity, which means that your heart, blood vessels and lungs all get a workout. You will breathe deeper, perspire and experience increased body temperature, which will improve your overall fitness level.</a></p>
      </article>
      <!-- article 2 -->
      <article class="one_third">
        <h2>Kick Boxing</h2>
        <img src="images/demo/kick.jpg" alt="">
        <p>Kickboxing is a group of stand-up combat sports based on kicking and punching, historically developed from karate mixed with boxing. Kickboxing is practiced for self-defense, general fitness, or as a contact sport.</p>  
      </article>
      <!-- article 3 -->
      <article class="one_third lastbox">
        <h2>Yoga</h2>
        <img src="images/demo/yoga.jpg" alt="">
        <p>Yoga does more than burn calories and tone muscles. It's a total mind-body workout that combines strengthening and stretching poses with deep breathing and meditation or relaxation.</p>
      </article>
    </section>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Erin Wilson 2018</a></p>
  </footer>
</div>
</body>
</html>