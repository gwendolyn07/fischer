<?php
	$servername = "localhost";
	$username = "root";
	$password = "Seth0426";
	$dbname = "ur";

	// Create Connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check Connection
	if ($conn-> connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	//set variables
        $loginPassword= mysqli_real_escape_string($conn, $_POST['password']);

	//sql statement to insert player
        $sql = "SELECT pID FROM Player WHERE (username = '".$_POST[username]."' AND pPassword= '$loginPassword')";
	//run statement
	$result = $conn -> query($sql);

	//get the return rows
      	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      	$active = $row['active'];
	$count = mysqli_num_rows($result);

	//check statement
        if ($count === 1) {
		//what happens if true
		header("Location: /recruiter/homepage.html");
        } else {
		//what happens if false
		$error = "Incorrect Username or password. Try again.";
		alert("Error try again.");
		header("Location: index.html");
        }

	$conn->close();

	function alert($msg) {
	    echo "<script type='text/javascript'>alert('$msg');</script>";
	}

?>

