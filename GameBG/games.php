<?php
    include_once 'chat.php';
?>
<?php
    $title = "Games";
    include_once 'header.php';
?>
<div class="play">
	<h2><span>НА КАКВО ИГРАЕШ?</span></h2>
</div>

<div class="game-wrapper">
	<!-- Devices -->
	<div class="single-device">
		<p>All</p>
	</div>
	<div class="single-device">
		<p>PC</p>
	</div>
	<div class="single-device">
		<p>Playstation</p>
	</div>
	<div class="single-device last">
		<p>Xbox</p>
	</div>
	<div class="clearfix"></div>
	<!-- Games -->
	<?php 
		require 'connection.php';

		$sqlCheck = 'SELECT * FROM games';
		$queryCheck = mysqli_query($connection, $sqlCheck);
		$allRows = mysqli_num_rows($queryCheck);
		$pages = ceil($allRows / 12);

		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}

		else {
			$page = 1;
		}

		$start_from = ($page - 1) * 12;

		$sql = "SELECT * FROM games LIMIT $start_from, 12";

		$query = mysqli_query($connection, $sql);

		while ($row = mysqli_fetch_assoc($query)) { ?>
			<div class="single-game">
				<div class="game-container">
					<a href="single-game.php?id=<?= $row['id']; ?>">
						<div class="game-image">
							<img src="admin/game-images/<?= $row['game_image']; ?>">
						</div>
						<div class="game-title">
							<h2><?= $row['game_title']; ?></h2>
						</div>
					</a>
				</div>
			</div>
<?php	}
	?>
	<div class="page-holder">
	<?php	for ($i=1; $i <= $pages; $i++) { ?>
			<a href="games.php?page=<?=$i?>"><?=$i?></a>
<?php	}
	?>
	</div>
</div>

<?php
    include_once 'footer.php';
?>
<?php
   include_once 'footer.php';
?>