<?php 
	include_once 'header.php';
?>
	<div class="margin-help"></div>
	<?php  
		include_once 'sidebar.php';
	?>

	<div class="game-form">
		<h1>Добави игра</h1>
		<hr>

		<form method="POST" action="post-game.php" enctype="multipart/form-data">
			<div>
				<input type="text" name="game" placeholder="Име на играта">
			</div>
			<div>
				<input type="file" name="game-img">
			</div>
			<div>
				<textarea name="game-desc" placeholder="Описание на играта"></textarea>
			</div>
			<div>
				<select name="device">
					<option value="PC">PC</option>
					<option value="Playstation">Playstation</option>
					<option value="Xbox">Xbox</option>
				</select>
			</div>
			<div>
				<input type="submit" value="Качи">
			</div>
		</form>
	</div>
</body>
</html>