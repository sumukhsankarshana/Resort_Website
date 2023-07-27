<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./css/style10.css">
    <link rel="stylesheet" href="./css/styleheader.css">
    <link rel="stylesheet" href="./css/stylefooter.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <title>Advaitha Serenity Resort</title>
    <style>
        body {
            margin: 1%;
        }
        
        .slider {
            position: relative;
            width: 100%;
            height: 500px;
        }
        
        .slide {
            text-align: center;
        }
        
        .slide img {
            max-width: 100%;
            max-height: 80%;
            position: relative;
        }
        
        .slick-prev,
        .slick-next {
            display: inline-block;
            transform: translateY(-50%);
            z-index: 1;
            background-color: rgba(0, 0, 0, 0);
            border: none;
            padding: 10px;
            font-size: 18px;
            color: #0eeb32;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 20px;
        }
        
        .slick-prev:hover,
        .slick-next:hover {
            background-color: rgba(8, 231, 8, 0.8);
        }
        
        .hero-btn {
            display: inline-block;
            text-decoration: none;
            color: #0f0505;
            border: 1px solid #fff;
            font-size: 13px;
            position: relative;
            padding: 12px 34px;
            cursor: pointer;
            background: transparent;
            border-radius: 12px;
            margin-right: 20px;
        }
        
        .hero-btn:hover {
            border: 1px solid #ffffff;
            background: #ffffff;
            transition: 0.7s;
        }
        
        .green-container {
            background-color: rgb(92, 219, 92);
            color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 4px 4px 8px rgba(6, 3, 8, 0.945);
        }
    </style>
</head>

<body>
    <section class="header3">
    <?php include 'header.php'; ?>

        <div class="text-box">
            <h1>
                WELCOME TO ADVAITHA SERENITY RESORTS
            </h1>
            <h3>Executive Rooms</h3>
            <p>

                “Book your dream vacation at our resort and let us take care of the rest.”

                <br>Bookings Open
            </p>
            <a href="#bookings" class="hero-btn">BOOK NOW</a>
        </div>
    </section>

    <section class="course" id="cottage">
        <h1>Executive Rooms</h1>
        <div class="slider">
            <div class="slide"><img src="./images/suite/ROOM3(2).jpg" alt="Slide 1"></div>
            <div class="slide"><img src="./images/suite/ROOM5.jpg" alt="Slide 2"></div>
            <div class="slide"><img src="./images/cottage/room4.jpg" alt="Slide 3"></div>
        </div>


        <p>
            Advatha serenity resort, Executive rooms are equipped with a cozy bed, the room is surrounded by trees and you will enjoy a morning walk, City view, And our room is spacious and equipped with Modern amenities, Two queen beds Private bathroom Mini-fridge
            and coffee maker, AC, Fan, maker, and satellite TV. </p>

    </section>
    <section class="course" id="cottage">

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8SsXon9g49F20eJYOtIFTwgQpCR3_rt5PZg&usqp=CAU" alt="cottage" height="500px" width="900px">

        <div class="green-container">
            <p style="text-decoration: solid;"><strong> 
            
Executive rooms are luxurious and spacious accommodations offered by resorts to provide a comfortable and memorable stay for their guests. These rooms are typically larger than standard rooms.

These rooms are designed to provide a comfortable living space that allows guests to relax and unwind after a long day of exploring the resort and its surroundings. They often come with a king-sized bed, plush bedding, and comfortable seating options like a sofa or armchair.

In addition to the comfortable living space, executive rooms often come with a range of amenities to make guests' stay more enjoyable. Some common amenities found in executive rooms include a flat-screen TV, a mini-fridge, a coffee maker, a work desk, and free Wi-Fi. Some resorts may also provide additional amenities like bathrobes, slippers, and high-end toiletries to enhance the guest's overall experience.

They are usually located in the most desirable areas of the resort, offering stunning views of the surrounding landscape. They often feature larger windows or balconies to allow guests to enjoy the scenery from the comfort of their room.
 These services ensure that guests feel pampered and well taken care of throughout their stay.</strong>


            </p>
        </div>

    </section>



    <section class="cta" data-aos="zoom-in-up">
        <h1>Live life with no excuses, travel with no regret.<br>Dare to live the life you’ve always wanted <br>Click Below! to Book</h1>
        <a href="./docs.html" class="hero-btn">Click Here</a>
    </section>

    <?php require_once 'footer.php'; ?>

    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }

        function gotoDocs() {
            location.href = ("docs.html");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 800,
            speed: 900,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>'
        });
    </script>

    <!-- animation for cards -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100, // offset (in px) from the original trigger point
            duration: 800
        });
    </script>
    <?php require_once 'footer.php'; ?>
</body>

</html>