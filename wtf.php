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
			
			$sql = "INSERT INTO Player (pStudentID, pFName, pLName, pPassword, pDOB, pGraduationDate, highSchoolID, gender) VALUES (678, 'Kwahi', 'Leonard', 'KL', '1989-09-09', '2020-09-09', 2 ,'M')";
			$result = $conn -> query($sql);

			if($result ->num_rows > 0){
				echo "YAY!";
			} else {
				echo "0 results";
			}

			$conn->close();
		?>

	</body>
</html>

