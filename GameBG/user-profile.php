<?php 
	$title = "Profile";
	include_once 'header.php';
	if (!isset($_SESSION["loggedin"]) ) {
		header("Location: logout.php");
	}
?>

<div class="profile-wrapper">
	<h1><?= $_SESSION['username']; ?></h1>
	<hr>

	<div class="profile-menu">
		<div class="profile-menu-div">
			<h1>Моите игри</h1>
		</div>
		<div class="profile-menu-div">
			<h1>Моите теми</h1>
		</div>
		<div class="profile-games-holder">
			<form method="POST" action="profile-add-game.php" id="game-form">
				<div class="add-game-title">
					<h1>Добави игра</h1>
				</div>
				<div class="add-game-input-div">
					<select name="game">
						<?php 
							require 'connection.php';

							$sql = 'SELECT * FROM games';
							$query = mysqli_query($connection, $sql);

							while ($row = mysqli_fetch_assoc($query)) { ?>
								<option value="<?= $row['id'] ?>"><?= $row['game_title'] ?></option>
					<?php	}
						?>
					</select>
				</div>
				<input type="hidden" name="id" value="<?= $_SESSION['user_id'] ?>">
				<div class="add-game-input-div">
					<input type="text" name="game_username" placeholder="Username в играта*">
				</div>
				<input type="submit" value="Добави">
				<?php 
					if (isset($_GET['error'])) {
						$error = $_GET['error'];

						if ($error == "play") {
							echo "<p>Ти вече играеш тази игра</p>";
						}
					}
				?>
			</form>
			<hr>

			<?php 
				$idTemp = $_SESSION['user_id'];
				$sqlGames = "SELECT * FROM game_users WHERE user_id = $idTemp";
				
				$queryGames = mysqli_query($connection, $sqlGames);

				while ($row = mysqli_fetch_assoc($queryGames)) { ?>
					<div class="profile-single-game">
						<div class="profile-single-game-in">
							<a href="single-game.php?id=<?= $row['game'] ?>">
								
								<?php 
									$sqlTemp = 'SELECT * FROM games WHERE id = "'.$row['game'].'"';

									$queryTemp = mysqli_query($connection, $sqlTemp);

									$rowTemp = mysqli_fetch_assoc($queryTemp);
									$title = $rowTemp['game_title'];
								?>
								<div class="profile-image-holder">
									<img src="admin/game-images/<?= $rowTemp['game_image'] ?>">
								</div>
								<h1><?= $title ?></h1>
								<a href="profile-delete-game.php?id=<?= $row['id'] ?>">Изтрий</a>
							</a>
						</div>
					</div>
		<?php	}
			?>
		</div>
		<div class="profile-posts-holder">

		<?php 
			$sqlForum = "SELECT * FROM forum_posts WHERE post_by = $idTemp";

			$queryForum = mysqli_query($connection, $sqlForum);

			while ($rowForum = mysqli_fetch_assoc($queryForum)) { ?>
				<a href="forum_topic.php?id=<?= $rowForum['post_topic'] ?>">
				 	<div class="profile-single-post">
				 		<p><?= $rowForum['post_content'] ?></p>
				 	</div>
				</a>
	<?php	}
		?>
		</div>
	</div>
</div>

<script src="js/jquery-3.0.0.js">
</script>
<script src="js/jquery.validate.js">
</script>

<script>
	$(document).ready(function() {
		$("#game-form").validate({
			rules: {
				game: "required",
				game_username: "required"
			},
			messages: {
				game: "Моля въведете игра",
				game_username: "Моля въведете username"
			}
		});
	});
</script>

<?php 
	include_once 'footer.php';
?>