<?php 
	$title = "Admin";
	$page = "Добави игра";
	include_once 'header.php';
?>
	<?php  
		include_once 'sidebar.php';
	?>
	<div class="margin-help"></div>

	<div class="game-form">
		<h1>Добави игра</h1>
		<hr>

		<form method="POST" action="post-game.php" enctype="multipart/form-data">
			<div>
				<input type="text" name="game" placeholder="Име на играта">
			</div>
			<div>
				<label for="game-img">Снимка на играта</label>
				<input type="file" name="game-img" id="game-img"> 
			</div>
			<div>
				<textarea name="game-desc" placeholder="Описание на играта"></textarea>
			</div>
			<div>
				<label for="device">Избери платформа</label>
				<select name="device" id="device">
					<option value="all">Всички</option>
					<option value="pc">PC</option>
					<option value="playstation">Playstation</option>
					<option value="xbox">Xbox</option>
				</select>
			</div>
			<div>
				<input type="submit" value="Качи">
			</div>
		</form>
	</div>
</body>
</html>