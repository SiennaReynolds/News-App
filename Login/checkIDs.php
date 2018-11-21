<html>
<body>
<?php
	$email = $_POST["email"];
	$password = $_POST["password"];
	$link = mysqli_connect("name", "username", "password","gsudbproject_fall2018") or die(mysql_error());
	$check = mysqli_query($link,"SELECT email,password FROM gsudbproject_fall2018.users WHERE email = '$email' AND password='$password'") or die(mysql_error());
	
	if ($check && mysqli_num_rows($check) > 0){
		echo '<script type="text/javascript"> document.location = "/OptionsPage.html";</script>';
        echo 'Username and Password Found'; 
    }
	else{
		echo '<script type="text/javascript"> document.location = "/FailedLoginPage.html";</script>';
    }
	?>

	</body>
</html>
