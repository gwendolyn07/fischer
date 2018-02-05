<?php
	include("../../connection.php");
	//starts the session
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 

		//These values are taken from the html form
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']); 

		$sqlPlayer = "SELECT pID FROM Player WHERE username = '$username' and pPassword= '$password'";
		$sqlRecruiter = "SELECT rID FROM Recruiter WHERE rUsername = '$username' and rPassword = '$password'";
		$sqlCoach = "SELECT hsID FROM HighSchool WHERE hsUsername = '$username' and hsPassword = '$password'";
		$sqlAdmin = "SELECT uID FROM Univerity WHERE cUsername = '$username' and cPassword = '$password'";

		$result = mysqli_query($db,$sqlPlayer);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];

		$count = mysqli_num_rows($result);

      // If result matched $username and $password, table row must be 1 row
		
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $username;
         
	//This is where it goes if successful
         header("location: ../../recruiter/homepage.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
