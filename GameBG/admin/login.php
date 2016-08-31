<?php  
	if (isset($_POST['username']) && isset($_POST['password'])) {
		session_start();
		$_SESSION["username"] = $_POST['username'];
		$_SESSION["password"] = $_POST['password'];

		if ($_SESSION["username"] == "gamebg" && $_SESSION["password"] == "test") {
			$_SESSION["user_level"] = 2;
			$_SESSION["loggedin"] = true;
			$_SESSION["admin"] = true;
			header("Location: index.php");
		}

		else {
			header("Location: login-form.php?login-error=0");
		}
	}
?>