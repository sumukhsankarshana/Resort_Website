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
            color: #0cec31;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 20px;
        }
        
        .slick-prev:hover,
        .slick-next:hover {
            background-color: rgba(13, 240, 13, 0.8);
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
    <?php include 'header.php'; ?>
    <section class="header1">
    

        <div class="text-box">
            <h1>
                WELCOME TO . ADVAITHA SERENITY RESORTS
            </h1>
            <h3>Suite Rooms</h3>
            <p>

                “Book your dream vacation at our resort and let us take care of the rest.”

                <br>Bookings Open
            </p>
            <a href="#bookings" class="hero-btn">BOOK NOW</a>
        </div>
    </section>

    <section class="course" id="cottage">
        <h1>Suite Rooms</h1>
        <div class="slider">
            <div class="slide"><img src="./images/cottage/room4.jpg" alt="Slide 1"></div>
            <div class="slide"><img src="./images/suite/ROOM3(2).jpg" alt="Slide 2"></div>
            <div class="slide"><img src="./images/suite/ROOM5.jpg" alt="Slide 3"></div>
        </div>


        <p>
            Advatha serenity resort, Suite rooms has Larger and more luxurious room, Separate living area and bedroom, Kitchenette or mini-kitchen, King size bed or larger, Jacuzzi or whirlpool bathtub, Complimentary snacks and drinks, More upscale decor and furnishings,
            Enhanced privacy features, such as soundproof walls
        </p>

    </section>
    <section class="course" id="cottage">

        <img src="./images/suite/15418363_552.png" alt="suite" height="700px" width="900px">
        <div class="green-container">

            <p style="text-decoration: solid;"><strong> 
            A suite room in our resort is a luxurious accommodation option that offers a spacious and comfortable stay to guests. These rooms are typically larger in size, designed to provide a more elevated experience.

They often feature separate living areas, dining areas, and bedrooms. This allows guests to spread out and feel more at home during their stay. The additional space is particularly beneficial for families or groups of friends who are traveling together and want to spend time together in their room.

Another key feature is the attention to detail in the design and decor. These rooms are often furnished with high-end furniture, luxurious bedding, and stylish accents that create an elegant and sophisticated ambiance. Guests can enjoy a truly luxurious experience, with features such as marble bathrooms, plush robes and slippers, and premium toiletries.

 guests have access to a private balcony with stunning views of the surrounding area. hot tub for guests to relax in. Other amenities may include a kitchenette, minibar, larger TV or sound system.
These rooms are often located in quieter parts of the resort, away from the hustle and bustle of other guests. This allows guests to enjoy a more peaceful and relaxed stay.
        </strong>


            </p>
        </div>

    </section>



    <section class="cta" data-aos="zoom-in-up">
        <h1>Live life with no excuses, travel with no regret.<br>Dare to live the life you've always wanted <br>Click Below! to Book</h1>
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
</body>

</html>