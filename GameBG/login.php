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
		if (!$result) {
			header('Location: index.php?login-error=0');
		}

		else {
			$_SESSION['username'] = $username;
			$_SESSION['loggedin'] = true;
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['user_level'] = $row['user_level'];
			header('Location: index.php');
		}
	}
?>