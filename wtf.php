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

                        $highSchool_Id= mysqli_real_escape_string($conn, $_REQUEST[hsID]);
                        $student_Id= mysqli_real_escape_string($conn, $_REQUEST[sID]);
                        $first_name= mysqli_real_escape_string($conn, $_REQUEST['firstName']);
                        $last_name= mysqli_real->escape_string($conn, $_REQUEST['lastName']);
                        $password= mysqli_real_escape_string($conn, $_REQUEST['password']);
                        $DOB= mysqli_real_escape_string($conn, $_REQUEST['dateOfBirth']);
                        $graduation_date= mysqli_real_escape_string($conn, $_REQUEST['gradDate']);
                        $gender= mysqli_real_escape_string($conn, $_REQUEST['gender']);


                        $sql = "INSERT INTO Player (pStudentID, pFName, pLName, pPassword, pDOB, pGraduationDate, highSchoolID, gender) VALUES ($student_ID, '$first_name', '$last_name', '$password', '$DOB', '$graduation_date', highSchool_Id ,'$gender')";

			$result = $conn -> query($sql);

			if ($result === TRUE) {
    				echo "New record created successfully";
			} else {
    				echo "Error: " . $sql . "<br>" . $conn->error;
			}


			$conn->close();
		?>

