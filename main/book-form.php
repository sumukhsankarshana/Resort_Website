<?php



$connection = mysqli_connect('localhost','root','','asr');

if(!$connection){
    echo '<script> alert("Data Not Saved"); </script>';
}
else{
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phnum = $_POST['phnum'];
    $cidate = $_POST['cidate'];
    $codate = $_POST['codate'];
    $noadults = $_POST['noadults'];
    $nochild = $_POST['nochild'];
    $roomno = $_POST['roomno'];
    $roomtype = $_POST['roomtype'];
    if (strtotime($cidate) < time()) {
        echo '<script> alert("Please select a check in date."); window.location.href = "book.php"; </script>';
        exit;
    }
    if (strtotime($codate) < time() || strtotime($codate) < strtotime($cidate)) {
     echo '<script> alert("Please select a proper checkout date."); window.location.href = "book.php"; </script>';
     exit;
 }
    $query = "INSERT INTO bookings(fname, email, phnum, cidate, codate, noadults, nochild, roomno, roomtype) VALUES ('$fname','$email','$phnum','$cidate','$codate','$noadults','$nochild','$roomno','$roomtype')";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Data Saved"); 
        window.location.href = "index.php";
        </script>';
        
    }}

    
    
    

    

?>