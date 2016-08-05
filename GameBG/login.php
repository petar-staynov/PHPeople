<?php 
	require 'connection.php';

	if (isset($_POST['username']) && isset($_POST['password'])) {
		//Get the user input from the form
		$username = $_POST['username'];
		$password = $_POST['password'];

		//Defense
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);

		//Hash the password
		$password = md5($password);

		$sql = 'SELECT * FROM users WHERE email = "'.$username.'" AND password = "'.$password.'" OR username = "'.$username.'" AND password = "'.$password.'"';

		if (!mysqli_query($connection, $sql)) {
			header('Location: login-form.php?login-error=0');
		}

		else {
			header('Location: index.php');
		}
	}
?>