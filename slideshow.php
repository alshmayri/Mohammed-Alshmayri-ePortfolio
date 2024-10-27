<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<h1>7 Notable Figures In Web Development</h1>

	<div class="mySlides fade">
	  <img src="images/timberners-lee.jpg" style="width:100%">
	  <h3 class="centered">Tim Berners-Lee - Invented World-Wide-Web in 1989. Director of the World Wide Web Consortium (W3C).</h3>
	</div>

	<div class="mySlides fade">
	  <img src="images/LeaVerou.jpg" style="width:100%">
	  <h3 class="centered">Lea Verous -  A front end web developer, speaker and author. Currently a Research Assistant at MIT CSAIL and an Invited Expert in the W3C CSS Working Group.</h3>
	</div>

	<div class="mySlides fade">
	  <img src="images/HakonWiumLie.jpg" style="width:100%">
	  <h3 class="centered">Håkon Wium Lie - A Norwegian web pioneer, a standards activist, and was the Chief Technology Officer of Opera Software. He is best known for developing Cascading Style Sheets while working with Tim Berners-Lee and Robert Cailliau at CERN in 1994.</h3>
	</div>

	<div class="mySlides fade">
	  <img src="images/VeerlePieters.jpg" style="width:100%">
	  <h3 class="centered">Veerle Pieters - A graphic and web designer, and co-founder of the famous design agency Duoh. She discovered web standards in 2003.</h3>
	</div>

	<div class="mySlides fade">
	  <img src="images/BrendanEich.jpg" style="width:100%">
	  <h3 class="centered">Brendan Eich - An American computer programmer and technology executive. He created the JavaScript programming language and co-founded the Mozilla project, the Mozilla Foundation, and the Mozilla Corporation.</h3>
	</div>

	<div class="mySlides fade">
	  <img src="images/RachelAndrew.jpg" style="width:100%">
	  <h3 class="centered">Rachel Andrew - A British web developer, author and speaker known for her expertise in HTML, CSS, JavaScript and PHP. She is an Invited Expert to the CSS Working Group created by the World Wide Web Consortium. Andrew is also a Google Developer Expert and a former member of the Web Standards Project.</h3>
	</div>

	<div class="mySlides fade">
	  <img src="images/JohnResig.jpg" style="width:100%">
	  <h3 class="centered">John Resig - An American software engineer and entrepreneur, best known as the creator and lead developer of the jQuery JavaScript library.</h3>
	</div>
	
	<p>The Web has changed the world, from how we communicate, learn, work, shop, obtain music, entertain ourselves (e.g. gaming, tv, etc.), manage our finances, date, look for employment, think about personal privacy, and run political campaigns. These are notable figures in this amazing transformation.</p>
	
	<p>Wait for next person or click Previous and Next buttons to move slide show faster.</p>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="" onclick="currentSlide(1)"></span> 
  <span class="" onclick="currentSlide(2)"></span> 
  <span class="" onclick="currentSlide(3)"></span> 
  <span class="" onclick="currentSlide(4)"></span> 
  <span class="" onclick="currentSlide(5)"></span> 
  <span class="" onclick="currentSlide(6)"></span> 
  <span class="" onclick="currentSlide(7)"></span> 
</div>

	<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1}    
	  x[myIndex-1].style.display = "block";  
	  setTimeout(carousel, 8000); // Change image every 8 seconds
	}
		var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

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
	
	

</body>
</html>  