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
			<h1>Моите постове</h1>
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
								<option value="<?= $row['game_title'] ?>"><?= $row['game_title'] ?></option>
					<?php	}
						?>
					</select>
				</div>
				<input type="hidden" name="id" value="<?= $_SESSION['user_id'] ?>">
				<div class="add-game-input-div">
					<input type="text" name="game_username" placeholder="Username в играта*">
				</div>
				<input type="submit" value="Добави">
			</form>
			<hr>

			<?php 

			?>

			<div class="profile-single-game">
				<div class="profile-single-game-in">
					<div class="profile-image-holder">
						<img src="images/gta-bg-1.jpg">
					</div>
					<h1>GTA</h1>
				</div>
			</div>
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