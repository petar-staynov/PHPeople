<?php  
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "gamebg" && $password == "test") {
			header("Location: index.php");
		}

		else {
			header("Location: login-form.php?login-error=0");
		}
	}
?>