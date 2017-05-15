<?php
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $db = "webtek-database-finals";
    $connect = mysqli_connect($host, $user, $passwd);
    mysqli_select_db($connect,$db); 

    // form inputs
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $inputAddr = $_POST['inputAddr'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];
    $bday = $_POST['bday'];
    $gender = $_POST['gender'];
    $uname = $_POST['uname'];
    $pw = $_POST['pw'];

    // query string
    $query = "UPDATE customer SET fname = '$pw' WHERE cu_id="101";
?>