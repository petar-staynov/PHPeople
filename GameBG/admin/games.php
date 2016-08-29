<?php 
	$title = "Игри";
	$page = "Игри";
	include_once 'header.php';
?>
<?php  
	include_once 'sidebar.php';
?>
<div class="games-holder">
	<?php 
	require 'connection.php';

	$sql = 'SELECT * FROM games';

	$query = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($query)) { ?>
			<div class="single-game">
				<div class="game-holder">
					<div class="image-container">
						<img src="game-images/<?= $row['game_image']; ?>">
					</div>
					<h1><?= $row['game_title']; ?></h1>
					<a href="update-game.php?id=<?= $row['id']; ?>">Редактирай</a>
					<a href="delete-game.php?id=<?= $row['id']; ?>">Изтрий</a>
				</div>
			</div>
<?php	}
?>
	<div class="clearfix">
	</div>
</div>