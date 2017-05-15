<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtek-database-finals";

$sp_id = $_POST['sp_id'];
$cu_id = $_POST['cu_id'];
$service_id = $_POST['service_id'];
$date = $_POST['date'];
$status = $_POST['status'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO requests ( sp_id, cu_id, service_id, date, status)
    VALUES ('$sp_id', '$cu_id', '$service_id', '$date', '$status')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header('Location: services.php');