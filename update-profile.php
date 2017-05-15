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
    if($fname != NULL){
        $query = "UPDATE customer SET fname = '$fname' WHERE cu_id='101'";
        if(mysqli_query($connect, $query)){
            echo "Update success";
        }else{
            echo "Update failed";
        }
    }
    if($lname != NULL) {
        $query1 = "UPDATE customer SET lname = '$lname' WHERE cu_id='101'";
        if(mysqli_query($connect, $query1)){
            echo "Update success";
        }else{
            echo "Update failed";
        }
    }
    if($inputAddr != NULL) {
        $query2 = "UPDATE customer SET Address = '$inputAddr' WHERE cu_id='101'";
        if(mysqli_query($connect, $query2)){
            echo "Update success";
        }else{
            echo "Update failed";
        }
    }
    if($email != NULL) {
        $query3 = "UPDATE customer SET email_address = '$email' WHERE cu_id='101'";
        if(mysqli_query($connect, $query3)){
            echo "Update success";
        }else{
            echo "Update failed";
        }
    }
    if($telno != NULL) {
        $query4 = "UPDATE customer SET tel_no = '$telno' WHERE cu_id='101'";
        if(mysqli_query($connect, $query4)){
            echo "Update success";
        }else{
            echo "Update failed";
        }
    }
    if($bday != NULL) {
        $query5 = "UPDATE customer SET birthday = '$bday' WHERE cu_id='101'";
        if(mysqli_query($connect, $query5)){
            echo "Update success";
        }else{
            echo "Update failed";
        }
    }
    if($uname != NULL) {
        $query6 = "UPDATE customer SET username = '$uname' WHERE cu_id='101'";
        if(mysqli_query($connect, $query6)){
            echo "Update success";
        }else{
            echo "Update failed";
        }
    }
    if($pw != NULL) {
        $query7 = "UPDATE customer SET password = '$pw' WHERE cu_id='101'";
        if(mysqli_query($connect, $query7)){
            echo "Update success";
        }else{
            echo "Update failed";
        }
    }
    if($gender != NULL) {
        $query8 = "UPDATE customer SET gender = '$gender' WHERE cu_id='101'";
        if(mysqli_query($connect, $query8)){
            echo "Update success";
        }else{
            echo "Update failed";
        }
    }
?>