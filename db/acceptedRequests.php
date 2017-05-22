<?php 
function acceptedRequests($id){
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

	$sql = "Select * from `arrangement` inner join `service provider` on requests.sp_id = `service provider`.sp_id inner join `services` on requests.service_id = services.service_id where requests.status = 'Approved' and cu_id =" . $id;
	
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

