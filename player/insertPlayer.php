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
			//set gender
			if (isset($_POST['male'])) {
				$gender = mysqli_real_escape_string($conn, "M");
			}
			if (isset($_POST['female'])) {
				$gender = mysqli_real_escape_string($conn, "F");
			}

			//check sports played
                        if (isset($_POST['football'])) {
                                $gender = mysqli_real_escape_string($conn, isset($_POST['football']));
                        }
                        if (isset($_POST['basketbll'])) {
                                $gender = mysqli_real_escape_string($conn, "F");
                        }


			//sql statement
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

