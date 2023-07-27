<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ASR resorts</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/events.css">
   <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="./css/styleheader.css">
    <link rel="stylesheet" href="./css/stylefooter.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<body>
<!-- header section starts  -->
<?php include 'header.php'; ?>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(./images/mainpic.jpg) no-repeat">
            <div class="content">
               <span>Find the place of your dreams! </span>
               <h3>Relax in nature</h3>
               <a href="book.html" class="btn">Book Now!!</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(./images/Banquet3.jpg) no-repeat">
            <div class="content">
               <span>Sing, Dance, Enjoy!</span>
               <h3></h3>
               <a href="book.html" class="btn">Book Now!!</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(./images/Banquet1.jpeg) no-repeat">
            <div class="content">
               <span></span>
               <h3></h3>
               <a href="book.html" class="btn">Book Now!!</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title" > Facities we Provide!! </h1>
   <div class="box-container">
      <div class="box">
         <img src="./images/icon-2.png" alt="">
         <h3>City Tours</h3>
      </div>
      <div class="box">
         <img src="./images/icon-6.png" alt="">
         <h3>Ampitheatre</h3>
      </div>
      <div class="box">
         <img src="./images/icon-1.png" alt="">
         <h3>Swimming Pool </h3>
      </div>
      <div class="box">
         <img src="./images/icon-3.png" alt="">
         <h3>Banquet Hall </h3>
      </div>
      <div class="box">
         <img src="./images/icon-5.png" alt="">
         <h3>Restaurant</h3>
      </div>
      <!-- <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Camp fire</h3>
      </div> -->
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="./images/mainmain.jpg" alt="">
   </div>
   <div class="content">
      <h3>Why us</h3>
      <p>We at ASR resorts believe in taking complete care of our customers and serve all of their needs. Organizing events help our customers to have a great intimate experience, and helps them relax more. We provide quality and resonable prices.</p>
      <a href="about.html" class="btn">read more</a>
   </div>
</section>



<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="./images/Ampit.jpeg">
      </div>
   </div>
   <div class="content">
      <h3>Ampitheatre</h3>
      <p>An impressive venue for outdoor performances and ceremonies.It has seating for upto 350 people
         Power is available at this site at an additional cost.Lighting and projector facilities are also available.</p>
      <a href="indi.php" class="btn">Learn More </a>
   </div>
</section>
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="./images/swim.jpg">
      </div>
   </div>
   <div class="content">
      <h3>Swimming Pool </h3>
      <p>Cool off in our swimming pool with your friends and family.Placed within trees the experience is tranquil and fun.</p>
      <a href="book.php" class="btn">Book now</a>
   </div>
</section>
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="./images/mantap.jpg">
      </div>
   </div>
   <div class="content">
      <h3>Marraige Hall </h3>
      <p>We provide a Beautifully Designed ,Well Managed, Budget Friendly, Properly Organized, With Catering Facilities included marraige hall. We can provide rooms and other of our facilities also. </p>
      <a href="mantap.php" class="btn">Learn more</a>
   </div>
</section>
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="./images/Venue.jpg">
      </div>
   </div>
   <div class="content">
      <h3>Banquet</h3>
      <p>We help people and organization organize Staff meet-ups, client meetings, training sessions, interviews and other scheduled conferences (video or in-person). The conference room is large size and caters to monthly reviews, board meetings. </p>
      <a href="conf.php" class="btn">Learn more</a>
   </div>
</section>
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="./images/resta.jpg">
      </div>
   </div>
   <div class="content">
      <h3>Restaurant</h3>
      <p>Indulge in the ultimate culinary experience in the whole Mysore, with our extraordinarily scrumptous Authentic South Indian and North Indian meals. Our Chefs are trained in the traditional cooking techniques inorder too give our customers the ultimate tasty food.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="./images/maindoor.jpg">
      </div>
   </div>
   <div class="content">
      <h3>The Whole Resort </h3>
      <p>Customers can rent the whole resort for various purposes like marraige , photoshoot, Organizational retreats etc.
         <br><br>
         Note: Interested  customers have to call and book the resort in weeeks advance preferably 2-3 weeks.
      </p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="./js/events.js"></script>
<?php require_once 'footer.php'; ?>
</body>
</html>