<?php 
function pendingRequests($id){
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

	$sql = "Select * from `requests` inner join `service provider` on requests.sp_id = `service provider`.sp_id inner join `services` on requests.service_id = services.service_id where requests.status = 'Pending' and cu_id = 101";
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

