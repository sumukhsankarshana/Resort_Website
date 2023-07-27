<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foods</title>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9.1.1/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="./css/swiper-bundle.min.css">
  <link rel="stylesheet" href="./css/stylefood.css">
  <link rel="stylesheet" href="./css/styleheader.css">
    <link rel="stylesheet" href="./css/stylefooter.css">  
</head>
<body>
<?php require_once 'header.php'; ?>
  <section class="home">
    <div class="Swiper bg-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/bg1.jpg" alt="">
          <div class="text-content">
            <h2 class="title">North Indian Cuisine</h2>
            <p>North Indian cuisine is one of the most popular and diverse cuisines in India. It is characterized by its use of rich spices, dairy products, wheat, and rice. The cuisine of North India varies depending on the region, but some of the popular dishes are shared across the region.</p>
            <a href="Menu.php"> <button class="read-btn">Menu <i class="uil uil-arrow-right"></i></button></a>
                </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="images/bg2.jpg" alt="">
          <div class="text-content">
            <h2 class="title">South Indian Cuisine</h2>
            <p>South Indian cuisine is a diverse and delicious cuisine that originated in the southern region of India, which includes the states of Andhra Pradesh, Karnataka, Kerala, Tamil Nadu, and Telangana. It is characterized by its spicy, aromatic, and flavorful dishes, which are made using a variety of spices, herbs, and ingredients</p>
            <a href="Menu.php">  <button class="read-btn">Menu <i class="uil uil-arrow-right"></i></button></a>
          </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="images/bg3.jpg" alt="">
          <div class="text-content">
            <h2 class="title">Chinese Cuisine</h2>
            <p>Chinese cuisine is one of the most diverse and popular cuisines in the world, with a history that dates back thousands of years. Chinese cuisine varies greatly depending on the region, with each region having its own unique culinary traditions, ingredients, and flavors.
                            </p>
                            <a href="Menu.php"> <button class="read-btn">Menu <i class="uil uil-arrow-right"></i></button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-slider-thumbs">
      <div class="swiper-wrapper thumbs-container">
        <img src="images/bg1.jpg" class="swiper-slide" alt="">
        <img src="images/bg2.jpg" class="swiper-slide" alt="">
        <img src="images/bg3.jpg" class="swiper-slide" alt="">
      </div>
    </div>
  </section>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/food.js"></script>
  <?php require_once 'footer.php'; ?>
</body>
</html>
      