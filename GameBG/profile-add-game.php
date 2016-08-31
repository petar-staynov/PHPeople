<?php 
	require 'connection.php';

	if (isset($_POST['game']) && isset($_POST['id']) && isset($_POST['game_username'])) {
		$game = $_POST['game'];
		$id = $_POST['id'];
		$username = $_POST['game_username'];

		$sql = 'INSERT INTO game_users (game, user_id, game_username) VALUES ("'.$game.'", "'.$id.'", "'.$username.'")';

		if (!mysqli_query($connection, $sql)) {
			header("Location: user-profile.php?success=0");
		}

		else {
			header("Location: user-profile.php?success=1");
		}
	}

	else {
		header("Location: user-profile.php");
	}
?>