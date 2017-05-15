<?php 
function rejectedRequests($id){
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

	$sql = "select lname,fname,username, services.service_name, requests.date from `service provider` inner join requests on `service provider`.sp_id = requests.sp_id inner join services on services.service_id = requests.service_id where requests.status = 'Rejected' and requests.cu_id = $id";
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

