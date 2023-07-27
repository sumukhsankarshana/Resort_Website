<?php session_start(); ?>

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

<div class="heading" style="background:url(./images/header-bg-3.png) no-repeat">
   <h1>Event Booking</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Book Here<h1>

    <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?> 

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="Enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="Enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="Enter your address" name="address">
         </div>

         <div class="selectBox">
            <span>Where to :</span>
            <label class="selectBox">
             <select  class="selectBox" placeholder="Place you want to visit" name="location">
               <option value="Ampitheatre">AMPHITHEATRE</option>
               <option value="Swimming Pool">SWIMMING POOL</option>
               <option value="Mantap">MANTAP</option>
               <option value="Banquet">BANQUET</option>
               <option value="Restaurent">RESTAURANT</option>
               <option value="The Whole restaurent">THE WHOLE RESORT</option>
             </select>
             </label>
            <!-- <input type="text" placeholder="Place you want to visit" name="location"> -->
         </div>


         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="Number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>
</section>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- booking section ends -->
<!-- footer section starts  -->


<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="./js/events.js"></script>
<?php require_once 'footer.php'; ?>
</body>
</html>