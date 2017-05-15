<?php 
function getTransactions($id){
	echo "test";
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

	$sql = "SELECT * FROM invoice INNER JOIN `service provider` ON invoice.sp_id = `service provider`.sp_id WHERE cu_id = $id;";
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

