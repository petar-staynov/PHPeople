<?php 
	session_start();
	require 'connection.php';

	if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
		//Get the user input from the form
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		//Defense
		$email = mysqli_real_escape_string($connection, $email);
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);

		//Hash the password
		$password = md5($password);

		//Check if the email or the username already exist
		$sql_check = 'SELECT * FROM users WHERE email = "'.$email.'" OR username = "'.$username.'"';

		$query = mysqli_query($connection, $sql_check);

		if (mysqli_num_rows($query) >= 1) {
			header("Location: login-form.php?reg-error=0");
		}

		//If email or username does not exist register the user
		else {
			$sql = 'INSERT INTO users (email, username, password, date_registered) VALUES ("'.$email.'", "'.$username.'", "'.$password.'", NOW())';
			
			if (!mysqli_query($connection, $sql)) {
				header('Location: index.php?reg-error=1');
			}

			else {
				$sqlGet = 'SELECT * FROM users WHERE username = "'.$username.'"';
				$queryGet = mysqli_query($connection, $sqlGet);
				$rowGet = mysqli_fetch_assoc($queryGet);

				$_SESSION["user_id"] = $rowGet['user_id'];
				$_SESSION['user_level'] = $rowGet['user_level'];
				$_SESSION["username"] = $username;
				$_SESSION["loggedin"] = true;
				header('Location: index.php');
			}
		}
	}
?>