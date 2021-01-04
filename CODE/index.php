<!DOCTYPE html>

include_once 'menubar.html';


<html>
<head>
    <title> ::eShop::</title>
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
        crossorigin="anonymous"></script>

        <meta charset='UTF-8'>
       
         <link rel="stylesheet" href="style/style.css">

</head>

<body>

<script>
const navHamburger = document.querySelector('#navHamburger');
navHamburger.addEventListener('click', (e) => {
    navHamburger.parentElement.classList.toggle('active');
})
</script>

  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="images/1.jpg" style="width:100%">
      <div class="text">Best Gadgets for Office</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">2 / 6</div>
      <img src="images/laptopcategory.jpg" style="width:100%">
      <div class="text">All that you need</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">3 / 6</div>
      <img src="images/4.bmp" style="width:100%">
      <div class="text">Is here</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">4 / 6</div>
      <img src="images/4.bmp" style="width:100%">
      <div class="text"></div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">5 / 6</div>
      <img src="images/4.bmp" style="width:100%">
      <div class="text"></div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">6 / 6</div>
      <img src="images/4.bmp" style="width:100%">
      <div class="text"></div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
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
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
<br>
<br>
<canvas id="snake" width="608" height="608"></canvas>
    <script src="snake.js"></script>
  <div class="copyrightColor">
    <footer>&copy; Copyright 2019 HTML.am</footer>
  </div>
</body>
</html>
