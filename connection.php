<!DOCTYPE html>
<html>
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "Seth0426";
			$dbname = "ur";

			// Create Connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check Connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			
			$sql = "SELECT pID, pFName, pLName FROM Player";
			$result = $conn -> query($sql);

			if($result ->num_rows > 0){
				//output data of each row
				while($row = $result ->fetch_assoc()){
					echo "<br> id: " . $row["pID"]. " -Name: " . $row["pFName"]. " " . $row["pLName"] . "<br>";
				}
			} else {
				echo "0 results";
			}

			$conn->close();
		?>

	</body>
</html>

