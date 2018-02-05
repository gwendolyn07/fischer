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

			//Insert cookies
			//if doesnt work try ' ' instead of ""
                        $StudentID= $_COOKIE["playerSID"]);
                        $HighSchoolID= $_COOKIE["playerHSID"]);

			//sql statement to insert player
                        $sql = "SELECT * FROM Player WHERE highSchoolID = $HighSchoolID AND pStudentID = $StudentID";
 			//(pStudentID, pFName, pLName, pPassword, pDOB, pGraduationDate, highSchoolID, gender)
			//run statement
			$result = $conn -> query($sql);

			//check statement
                        if ($result ->num_rows > 0) {
                                while($row = $result -> fetch_assoc()) {
					echo "Name: " . $row["pFName"]. " " . $row["pLName"]. "<br>";
				}
                        } else {
                                echo "0 results"
                        }

			$conn->close();
		?>

