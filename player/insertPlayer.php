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
	
	$highSchool_Id= mysqli_real_escape_string($link, $_REQUEST['hsID]);
	$player_Id= mysqli_real_escape_string($link, $_REQUEST['pID']);
	$first_name= mysqli_real_escape_string($link, $_REQUEST['firstName']);
	$last_name= mysqli_real_escape_string($link, $_REQUEST['lastName']);
	$password= mysqli_real_escape_string($link, $_REQUEST['password']);
	$DOB= mysqli_real_escape_string($link, $_REQUEST['dateOfBirth']);
	$graduation_date= mysqli_real_escape_string($link, $_REQUEST['gradDate']);
	$gender= mysqli_real_escape_string($link, $_REQUEST['gender']);

	$sql = "INSERT INTO Player (pStudentID, pFName, pLName, pPassword, pDOB, pGraduationDate, highSchoolID, gender) VALUES ($player_Id, '$first_name', '$last_name', '$password', '$DOB', '$graduation_date', $highSchool_Id, '$gender')";
	
	if(mysqli_query($link, $sql)){
		echo "Records added successfully.";
	} else {
		echo "ERROR: Not able to execute $sql. " .mysqli_error($link);
	}

	mysqli_conn->close();
?>

