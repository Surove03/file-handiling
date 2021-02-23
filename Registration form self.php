<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Self</title>
</head>
<body>

	<h1>Registration Form Self</h1>

	<?php
		$firstNameErr = $lastNameErr = $gender= $email = $username= $password=$recoveryemail="";
		$firstName = ""; 
		$lastName = ""; 
		$gender="";
        $email="";
        $username="";
        $password="";
        $recoveryemail="";



		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['fname'])) {
				$firstNameErr = "Please fill up the first name properly";
			}
			else {
				$firstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				$lastNameErr = "Please fill up the last name properly";
			}
			else {
				$lastName = $_POST['lname'];
			}
            if(empty($_POST['email'])) {
				$email = "Please fill up the last name properly";
			}
			else {
				$email = $_POST['email'];
			}
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr="Invalid mail";
            }
            else{
                $email=$_POST['email'];
            }

            if(empty($_POST['username'])) {
				$lastNameErr = "Please fill up the last name properly";
			}
			else {
				$lastName = $_POST['username'];
			}
            if(empty($_POST['pass'])) {
				$lastNameErr = "Please fill up the Password properly";
			}
			else {
				$lastName = $_POST['pass'];
			}
            if(empty($_POST['remail'])) {
				$email = "Please fill up the last name properly";
			}
			else {
				$recoveryemail = $_POST['remail'];
			}
            if (!filter_var($recoveryemail, FILTER_VALIDATE_EMAIL)) {
                $emailErr="Invalid mail";
            }
            else{
                $recoveryemail=$_POST['remail'];
            }






			if(empty($_POST['website'])) {
				$websiteErr = "Please fill up the website url properly";
			}
			else {
				$website = $_POST['website'];
			}

		
		}
	?>

	

</body>
</html>