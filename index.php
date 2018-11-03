<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour";
$con=mysqli_connect($servername,$username,$password,$dbname);

if ($con->connect_error){
	die("connection failed: " . $con->connect_error);
}
$sql= "SELECT id , country_id , description ,hex_color_code FROM tour";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
	
	while ($row = mysqli_fetch_assoc($result)) {
		
		echo "Tour ID:" . $row["id"]." | Tour Country ID: ".$row["country_id"]."<br>";
		echo"<hr/>";
		echo $row ["description"]."<br>";
		
	}
	
} else {
	echo "0 result";
}

?>