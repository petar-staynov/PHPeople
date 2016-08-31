<?php 
	require 'connection.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = "DELETE FROM game_users WHERE id = $id";

		if (!mysqli_query($connection, $sql)) {
			header("Location: user-profile.php?deleted=0");
		}

		else {
			header("Location: user-profile.php?deleted=1");
		}
	}

	else {
		header("Location: user-profile.php");
	}
?>