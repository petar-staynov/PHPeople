<?php 
	$title = "List";
	require 'connection.php';

	require_once 'header.php';
?>


<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sqlGame = 'SELECT * FROM games WHERE id = "'.$id.'"';
		$queryGame = mysqli_query($connection, $sqlGame);
		$rowGame = mysqli_fetch_assoc($queryGame);
		$game = $rowGame['game_title'];
		?>


		<div class="list-wrapper">
			<div class="list-title">
				<h1>Потребителски имена в <?= $game ?></h1>
			</div>

			

		<?php

		$sql = 'SELECT * FROM game_users WHERE game = "'.$id.'"';

		$query = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($query)) { ?>
			<div class="single-user">
				<div>
					<p><?= $row['game_username'] ?></p>
				</div>
			</div>
<?php	} ?>
		
		</div>

<?php	}

	else {
		header("Location: games.php");
	}
?>


<?php 
	require_once 'footer.php';
?>