<!DOCTYPE html>
<html lang="en">
  
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>conference</title>
       <!-- font awesome cdn link  -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
       
        <!-- custom css link -->
       <link rel="stylesheet" href="./css/spots.css">
       <link rel="stylesheet" href="./css/styleheader.css">
    <link rel="stylesheet" href="./css/stylefooter.css">
    </head>
<body>
<?php include 'header.php'; ?>
    <section class="about" id="about">

        <div class="row">
  
           <div class="image">
              <img src="./images/Banquet3.jpg" alt="">
           </div>
  
           <div class="content">
              <h3>Conference</h3>
              <p>Well Decorated, Comfortable and Air Conditioned Conference hall cum Banquet is availblein our premises. It is perfect for Company events , College events , Tarining programs , seminars Etc.  </p>
              <p>Multiple Sitting Arrangements , with the max capacity of 500 people this Conferenceroom is equipped with all the state of the art equipments.
                Food and Beverages are also available on demand.
              </p>
           </div>
  
        </div>
  
     </section>
     <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./images/Venue.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./images/BAn.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./images/Banquet3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
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
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
<?php require_once 'footer.php'; ?>
</body>
</html>