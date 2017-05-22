<?php
function getTransactions($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtek-database-finals";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "
SELECT 
    *

FROM
    `service provider`
        INNER JOIN
    invoice
        ON
        `service provider`.`sp_id` = invoice.sp_id
WHERE
     invoice.cu_id = $id";
    $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //     	echo $row['fname'];
    //     }
    // } else {
    //     echo "0 results";
    // }
    // $conn->close();
    return $result;


}

function getServices($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtek-database-finals";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `services` INNER JOIN `service provider` on services.sp_id = `service provider`.sp_id";
    $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //     	echo $row['fname'];
    //     }
    // } else {
    //     echo "0 results";
    // }
    // $conn->close();
    return $result;
}

