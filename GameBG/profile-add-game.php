<?php 
	require 'connection.php';

	if (isset($_POST['game']) && isset($_POST['id']) && isset($_POST['game_username'])) {
		$game = $_POST['game'];
		$id = $_POST['id'];
		$username = $_POST['game_username'];

		// Check if user plays this game
		$sqlCheck = 'SELECT * FROM game_users WHERE game = "'.$game.'" AND user_id = "'.$id.'"';
		$queryCheck = mysqli_query($connection, $sqlCheck);

		if (mysqli_num_rows($queryCheck) > 0) {
			header("Location: user-profile.php?error=play");
		}

		else {
			$sql = 'INSERT INTO game_users (game, user_id, game_username) VALUES ("'.$game.'", "'.$id.'", "'.$username.'")';

			if (!mysqli_query($connection, $sql)) {
				header("Location: user-profile.php?success=0");
			}

			else {
				header("Location: user-profile.php?success=1");
			}
		}
	}

	else {
		header("Location: user-profile.php");
	}
?>