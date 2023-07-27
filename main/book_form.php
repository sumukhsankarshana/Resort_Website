<?php

   $connection = mysqli_connect('localhost','root','','asr');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      if (strtotime($arrivals) < time()) {
         echo '<script> alert("Please select a proper arrival date."); window.location.href = "book.php"; </script>';
         exit;
     }
     if (strtotime($leaving) < time() || strtotime($leaving) < strtotime($arrivals)) {
      echo '<script> alert("Please select a proper leaving date."); window.location.href = "book.php"; </script>';
      exit;
  }
      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "Event Message recieved contact Office.";
      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>