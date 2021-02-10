<!DOCTYPE html>
<link rel="icon" href="img/logo.jpg" type="image/icon type">
<html style="background-color: rgb(216, 214, 214);">
  
<head>
    <link rel="stylesheet" href="style/style.css">
    
<title>About us</title>
<?php

include './components/navbar.php' ?>
</head>
<body >
 
    <div id="container-slides">
        <div class="slide showing">Oferta1-Cmimi 3€</div>
        <div class="slide">Oferta2-Cmimi 3.3€</div>
        <div class="slide">Oferta3-Cmimi 2.8€</div>
        <div class="slide">Oferta4-Cmimi 3.65€</div>
        <div class="slide">Oferta5-Cmimi 2.90€</div>
        
      </div>
    <script>
        var slides = document.querySelectorAll('#container-slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,3000);

function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
}
    </script>
</body>

</html>