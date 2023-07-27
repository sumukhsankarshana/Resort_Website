<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylebookform.css">
    <title>Booking Form | Advaitha Serinity Resorts</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="./css/stylebookform.css">
    <link rel="stylesheet" href="./css/styleheader.css">
    <link rel="stylesheet" href="./css/style.css">
    
    <link rel="stylesheet" href="./css/stylefooter.css">
    <script src="./js/nav.js"></script>
</head>

<body >
    <?php include 'header.php'; ?>
      <script src="./js/nav.js"></script>
    
      <section class="main_bg">
    <div class="form">
        <div class="form-text">
            <h1><span><img src="./images/art-1.png" alt=""></span>Book Now <span><img src="./images/art-1.png" alt=""></span></h1>
            <p>Note: Please confirm your booking with reception once the booking information is submitted</p>
        </div>
        <div id="add_err2"></div>
        <div class="main-form">
            <form action="book-form.php" method="post">
                <div>
                    <span>Your full name ?</span>
                    <input type="text" name="fname" id="fname" class="fname" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Your email address ?</span>
                    <input type="email" name="email" id="email" class="email" placeholder="Write your email here..." required> 
                </div>
                <div>
                    <span>Phone no?</span>
                    <input type="number" name="phnum" id="phnum" class="phnum" placeholder="Write your Phone Number here..." required> 
                </div>
                <div>
                    <span>Check-in Date?</span>
                    <input type="date" name="cidate" id="cidate" class="cidate" placeholder="date" required>
                </div>
                <div>
                    <span>Check-Out Date?</span>
                    <input type="date" name="codate" id="codate" class="codate" placeholder="date" required>
                </div>
                
                               
                <div>
                    <span>Number of Adults?</span>
                    <input type="number" name="noadults" id="noadults" class="noadults" placeholder="Write your number here..." required>
                </div>
                <div>
                    <span>Number of Children?</span>
                    <input type="number" name="nochild" id="nochild" class="nochild" placeholder="Write your number here..." required>
                </div>
                <div>
                    <span>Number of Rooms?</span>
                    <input type="number" name="roomno" id="roomno" class="roomno" placeholder="Write your number here..." required>
                </div>
                <div class="typeroom">
                    
                    <span>Type Of Room?</span>
                    <select name="roomtype" id="roomtype" class="roomtype" required>
                        <option value=""><---Room---></option>
                        <option value="Cottages">Cottages</option>
                        <option value="Suite Room">Suite Room</option>
                        <option value="Executive Room">Executive Room</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>
                <div id="submit">
                
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>
</section>
<?php require_once 'footer.php'; ?>
</body>

</html>