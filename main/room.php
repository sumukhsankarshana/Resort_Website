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
    <title>Advaitha Serenity Resort</title>
</head>

<body>
<?php include 'header.php'; ?>
    <section class="header">
   

        <div class="text-box">
            <h1>
                WELCOME TO ADVAITHA SERENITY RESORTS
            </h1>
            <h3>New Chitravana Resort</h3>
            <p>

                “Book your dream vacation at our resort and let us take care of the rest.”

                <br>Bookings Open
            </p>
            <a href="#bookings" class="hero-btn">BOOK NOW</a>
        </div>
    </section>

    <section class="course" id="cottage">
        <div style="text-align: right;">
            <a href="./docs.html" class="hero-btn">Book now</a>
        </div>
        <h1>Cottage</h1>
        <button onclick="window.location.href='cottage.html'">View</button>
        <style>
            button {
                background-color: white;
                color: #13b94b;
                padding: 12px 24px;
                border: 2px solid #0b0d0f;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            
            button:hover {
                background-color: #24f11d;
                color: white;
            }
        </style>
        <div class="row" data-aos="zoom-in-up">
            <div class="course-colomn">
                <img src="./images/cottage/omm5.jpg" alt="cottage" class="box">
            </div>
            <div class="course-colomn">
                <img src="./images/cottage/room1.jpg" alt="cottage" class="box">
            </div>
            <div class="course-colomn">
                <img src="./images/cottage/room4.jpg" alt="cottage" class="box">
            </div>
        </div>
        <p>Advatha serenity resort, Cottage room includes Stand-alone or semi-detached building separate from main hotel/resort, Rustic or country-style decor and furnishings, Wooden exterior and/or interior walls, Private outdoor space such as a porch or
            patio, Fireplace or wood stove, Kitchenette or full kitchen, Complimentary snacks and drinks, Enhanced privacy and seclusion from other guests, Access to natural surroundings such as forests, mountains, and lakes
        </p>

    </section>

    <section class="course" id="suite">
        <h1>Suite Room</h1>
        <button onclick="window.location.href='suite.html'">View</button>
        <style>
            button {
                background-color: white;
                color: #13b94b;
                padding: 12px 24px;
                border: 2px solid #0b0d0f;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            
            button:hover {
                background-color: #24f11d;
                color: white;
            }
        </style>

        <div class="row" data-aos="zoom-in-up">
            <div class="course-colomn">
                <img src="./images/suite/15418363_552.png" alt="suite" class="box">
            </div>
            <div class="course-colomn">
                <img src="./images/suite/ROOM3(2).jpg" alt="suite" class="box">
            </div>
            <div class="course-colomn">
                <img src="./images/suite/ROOM5.jpg" alt="suite" class="box">
            </div>
        </div>
        <p>Advatha serenity resort, Suite rooms has Larger and more luxurious room, Separate living area and bedroom, Kitchenette or mini-kitchen, King size bed or larger, Jacuzzi or whirlpool bathtub, Complimentary snacks and drinks, More upscale decor
            and furnishings, Enhanced privacy features, such as soundproof walls</p>

    </section>

    <section class="course" id="executive">
        <h1>Executive Room</h1>
        <button onclick="window.location.href='executive.html'">View</button>
        <style>
            button {
                background-color: white;
                color: #13b94b;
                padding: 12px 24px;
                border: 2px solid #0b0d0f;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            
            button:hover {
                background-color: #24f11d;
                color: white;
            }
        </style>

<div class="row" data-aos="zoom-in-up">
    <div class="course-colomn">
        <img src="./images/suite/15418363_552.png" alt="suite" class="box">
    </div>
    <div class="course-colomn">
        <img src="./images/suite/ROOM3(2).jpg" alt="suite" class="box">
    </div>
    <div class="course-colomn">
        <img src="./images/suite/ROOM5.jpg" alt="suite" class="box">
    </div>
</div>
        <p>Advatha serenity resort, Executive rooms are equipped with a cozy bed, the room is surrounded by trees and you will enjoy a morning walk, City view, And our room is spacious and equipped with Modern amenities, Two queen beds Private bathroom Mini-fridge
            and coffee maker, AC, Fan, maker, and satellite TV.</p>

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