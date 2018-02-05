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

			//set variables
                        $first_name= mysqli_real_escape_string($conn, $_POST['firstName']);
                        $last_name= mysqli_real_escape_string($conn, $_POST['lastName']);
                        $password= mysqli_real_escape_string($conn, $_POST['password']);
                        $DOB= mysqli_real_escape_string($conn, $_POST['DOB']);
                        $graduation_date= mysqli_real_escape_string($conn, $_POST['gradDate']);
			$gender = mysqli_real_escape_string($conn, $_POST['gender']);

			//sql statement to insert player
                        $sql = "INSERT INTO Player (pStudentID, pFName, pLName, pPassword, pDOB, pGraduationDate, highSchoolID, gender) VALUES ('".$_POST[sID]."', '$first_name', '$last_name', '$password', '$DOB', '$graduation_date', '".$_POST[hsID]."' ,'$gender')";	
			//run statement
			$result = $conn -> query($sql);

			//check statement
                        if ($result === TRUE) {
                                echo "New record created successfully";
                        } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                        }

			$conn->close();
		?>

