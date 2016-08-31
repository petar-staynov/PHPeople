<?php 
	$title = "Single game";
	include_once 'header.php';
?>
	<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body class="blog">
	<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	else {
		$id = 1;
	}

	require 'connection.php';

	$sql = 'SELECT * FROM games WHERE id = "'.$id.'"';

	$query = mysqli_query($connection, $sql);

	while ($row = mysqli_fetch_assoc($query)) { ?>
		<div class="single-game-page">
			<h1><?= $row['game_title']; ?></h1>
			<hr>

			<div class="game-image-holder">
				<div class="game-image">
					<img src="admin/game-images/<?= $row['game_image']; ?>">
				</div>
			</div>
			<div class="single-game-desc">
				<p>
					<?= $row['game_desc']; ?>
				</p>
			</div>
			<div class="game-users">
				<a href="user-list.php?id=<?= $id ?>">Потребители които играят тази игра</a>
			</div>
			<div class="clearfix"></div>
		</div>
	<?php	} ?>f
	</body>
	</html>
<?php 
	include_once 'footer.php';
?>