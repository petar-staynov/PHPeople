<?php 
	require 'connection.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sqlImage = 'SELECT * FROM games WHERE id = "'.$id.'"';
		$queryImage = mysqli_query($connection, $sqlImage);

		while ($row = mysqli_fetch_assoc($queryImage)) {
			$image = $row['game_image'];
		}

		unlink("game-images/".$image);

		$sql = 'DELETE FROM games WHERE id = "'.$id.'"';

		if (mysqli_query($connection, $sql)) {
			header("Location: games.php?deleted=1");
		}
	}

	else {
		header("Location: games.php");
	}
?>