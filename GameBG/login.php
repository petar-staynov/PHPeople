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

		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) < 1) {
			header('Location: index.php?login-error=0');
		}

		else {
			session_start();
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $username;
			$_SESSION['loggedin'] = true;
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['user_level'] = $row['user_level'];
			header('Location: index.php');
		}
	}
?>