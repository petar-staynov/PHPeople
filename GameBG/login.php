<?php 
	require 'connection.php';
    session_start();
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
		$result = mysqli_query($connection, $sql);
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $row['user_id'];
		if (!mysqli_query($connection, $sql)) {
			header('Location: login-form.php?login-error=0');
		}

		else {
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['loggedin'] = true;
			header('Location: index.php');
		}
	}
?>